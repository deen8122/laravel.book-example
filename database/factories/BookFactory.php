<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory {

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition() {
		return [
			'user_id' => rand(1, 4),
			'name' => $this->faker->realText(rand(25, 30)),
			'description' => $this->faker->realText(rand(200, 300)),
			'created_at' => $this->faker->dateTimeBetween('-60 days', '-30 days'),
			'updated_at' => $this->faker->dateTimeBetween('-20 days', '-1 days'),
		];
	}

}
