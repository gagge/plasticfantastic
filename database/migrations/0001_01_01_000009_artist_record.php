<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('artist_record', function (Blueprint $table) {
      $table->uuid(column: 'id')->primary();
      $table->foreignUuid('artist_id')->references('id')->on('artists');
      $table->foreignUuid('record_id')->references('id')->on('records');
      $table->timestamps();
      $table->unique(['artist_id', 'record_id']);
    });
  }

  public function down(): void {
    Schema::dropIfExists('artist_record');
  }
};
