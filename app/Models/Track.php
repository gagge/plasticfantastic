<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\TrackFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\CustomPivot;

class Track extends Model {
  use HasFactory;
  use HasUuids;

  protected static function newFactory(): TrackFactory {
    return TrackFactory::new();
  }
  
  protected $fillable = [
    'title',
    'release_date',
  ];
  public function artists(): BelongsToMany{
    return $this->belongsToMany(Artist::class)->using(CustomPivot::class);
  }

  public function records(): BelongsToMany {
    return $this->belongsToMany(Record::class)->using(CustomPivot::class);
  }

  public function writers(): BelongsToMany {
    return $this->belongsToMany(Writer::class)->using(CustomPivot::class);
  }
}
