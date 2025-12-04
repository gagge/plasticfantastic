<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Record;
use App\Models\RecordLabel;
use App\Models\Track;
use App\Models\Artist;
use App\Models\Writer;
use Illuminate\Support\Arr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  use WithoutModelEvents;
  public function run(): void {

    $recordLabels = RecordLabel::factory()
      ->count(10)
      ->create();

    $recordLabels->each(function ($recordLabel) {
      $records = Record::factory()
        ->count(10)
        ->for($recordLabel)
        ->create();

      $records->each(function ($record) {
        $artist = Artist::factory()
          ->count(1)
          ->hasAttached($record)
          ->create();

        $writers = Writer::factory()
          ->count(3)
          ->create();

        Track::factory()
          ->count(10)
          ->hasAttached($record)
          ->hasAttached($artist)
          ->hasAttached($writers->random())
          ->create();  
      });
    });

    User::factory()->create([
      'name' => 'Test User',
      'email' => 'test@example.com',
    ]);
  }
}
