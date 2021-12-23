<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		  // создать 4 пользователей сайта
		  
		  \App\Models\User::factory()->count(4)->create(); 
	}

}
