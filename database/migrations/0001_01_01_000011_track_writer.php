<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('track_writer', function (Blueprint $table) {
      $table->uuid(column: 'id')->primary();
      $table->foreignUuid('track_id')->references('id')->on('tracks');
      $table->foreignUuid('writer_id')->references('id')->on('writers');
      $table->timestamps();
      $table->unique(['track_id', 'writer_id']);
    });
  }

  public function down(): void {
    Schema::dropIfExists('track_writer');
  }
};
