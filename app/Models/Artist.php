<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\ArtistFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\CustomPivot;
class Artist extends Model {
  use HasFactory;
  use HasUuids;

  protected static function newFactory(): ArtistFactory {
    return ArtistFactory::new();
  }
  
  protected $fillable = [
    'name',
    'active',
  ];

  public function tracks(): HasMany {
    return $this->hasMany(Track::class);
  }
  public function records(): BelongsToMany {
    return $this->belongsToMany(Record::class)->using(CustomPivot::class);
  }
}
