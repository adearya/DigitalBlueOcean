<?php

namespace App\Models;

USE App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collections extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(Categories::class);
    }
}
