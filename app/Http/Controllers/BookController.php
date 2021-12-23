<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	
	public function index() {
		$books = Book::orderBy('created_at', 'desc')->with('user')->paginate(5);
		return view('index', compact('books'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {

		//event(new \App\Events\BookCreated(Book::first()));		
		return view('book.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function add(Request $request) {
		$request->validate([
			'name' => 'required',
			'description' => 'required',
		]);
		$book = Book::create($request->all());
		$book->user()->associate(Auth::user())->save();
		/*
		 * Создаем уведомление
		 */
		event(new \App\Events\BookCreated($book));
		return redirect()->route('book.create', $book)->with('success', 'Book  created successfully.');
	}

}
