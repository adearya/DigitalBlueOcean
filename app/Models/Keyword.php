<?php

namespace App\Models;

use App\Models\Collection;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
  public function collections() {
    return $this->belongsToMany(Collection::class);
  }

  public function reviews() {
    return $this->belongsToMany(Review::class);    
  }
}