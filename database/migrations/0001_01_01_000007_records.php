<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('records', function (Blueprint $table) {
      $table->uuid(column: 'id')->primary();
      $table->string('title');
      $table->string('isrc')->unique();
      $table->date('release_date');
      $table->string('type')->nullable();
      $table->timestamps();

      $table->foreignUuid('record_label_id')->references('id')->on('record_labels');
    });
  }

  public function down(): void {
    Schema::dropIfExists('records');
  }
};
