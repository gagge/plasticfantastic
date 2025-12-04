<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\RecordLabel;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
  public function definition(): array
  {
    return [
      'title' => fake()->sentence(2),
      'isrc' => Str::random(12),
      'release_date' => fake()->date(),
      'record_label_id' => RecordLabel::factory(),
      'type' => Str::random(10),
    ];
  }

}
