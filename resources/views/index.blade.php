@extends('layouts.app')

@section('content')
<div class="">

    <h1 class="mb-3">Список книг</h1>

    @if (Auth::check())
    Привет, <b>{{ Auth::user()->name }}</b>! <a href="/book/add">Добавить книгу</a>

    @else
    Авторизуйтесь чтоб добавить книгу: <a class="link" href="/login">войти</a>
    @endif

    

    @foreach ($books as $book)
    @include('book.list-item', ['book' => $book])
    @endforeach
    <br>

    {{ $books->links() }}


</div>
@endsection