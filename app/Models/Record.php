<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\RecordFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Record extends Model {
  use HasFactory;
  use HasUuids;

  protected static function newFactory(): RecordFactory {
    return RecordFactory::new();
  }
  
  protected $fillable = [
    'title',
    'isrc',
    'release_date',
    'recordLabel_id',
    'type',
  ];

  protected $casts = ['relationName.pivot.id' => 'string'];

  public function recordLabel(): BelongsTo {
    return $this->belongsTo(RecordLabel::class);
  }

  public function track(): HasMany {
    return $this->hasMany(Track::class);
  }

  public function artist(): HasMany {
    return $this->hasMany(Artist::class);
  }
}