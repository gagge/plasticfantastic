<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrackFactory extends Factory {
  public function definition(): array {
    return [
      'title' => fake()->sentence(2),
      'release_date' => fake()->date(),
    ];
  }
}
