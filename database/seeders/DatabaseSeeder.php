<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		//$this->call(UserSeeder::class);
		$this->command->info('Таблица пользователей загружена данными!');

		$this->call(BookSeeder::class);
		$this->command->info('Таблица книг  загружена данными!');
	}

}
