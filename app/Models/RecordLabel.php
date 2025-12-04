<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\RecordLabelFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
class RecordLabel extends Model {
  use HasFactory;
  use HasUuids;

  protected static function newFactory(): RecordLabelFactory {
    return RecordLabelFactory::new();
  }
  
  protected $fillable = [
    'name',
    'country',
  ];

  public function records(): HasMany {
    return $this->hasMany(Record::class);
  }
}