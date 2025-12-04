<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('record_track', function (Blueprint $table) {
      $table->uuid(column: 'id')->primary();
      $table->foreignUuid('record_id')->references('id')->on('records');
      $table->foreignUuid('track_id')->references('id')->on('tracks');
      $table->timestamps();
      $table->unique(['record_id', 'track_id']);
    });
  }

  public function down(): void {
    Schema::dropIfExists('record_track');
  }
};
