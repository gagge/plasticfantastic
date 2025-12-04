<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\WriterFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Writer extends Model {
  use HasFactory;
  use HasUuids;

  protected static function newFactory(): WriterFactory {
    return WriterFactory::new();
  }
  
  protected $fillable = [
    'name',
  ];

  public function tracks(): HasMany {
    return $this->hasMany(Track::class);
  }
}
