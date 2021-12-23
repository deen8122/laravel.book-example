<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

/*
 * Событие добавление книги!
 */

class NewBookEmailNotification {

	/**
	 * Handle the event.
	 *
	 * @param  object  $event
	 * @return void
	 */
	public function handle(\App\Events\BookCreated $event) {
		$book = $event->book;
		
		/*
		 * Получаем всех пользователей
		 * 
		 */
		$users = \App\Models\User::where('id', '!=', Auth::user()->id)->get();

		foreach ($users as $user) {
			$details = [
				'email' => $user->email,
				'user_name' => $user->name,
				'book_name'=>$book->name,
				'book_description'=>$book->description,
				];
			/*
			 * 
			 */
			\App\Jobs\SendEmail::dispatch($details);
			
			
		}
	}

}
