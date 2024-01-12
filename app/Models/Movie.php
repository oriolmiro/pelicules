<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
        // Els atributs assignables en massa
        protected $fillable = ['title', 'release_year', 'director', 'image'];

        // Relació many-to-many amb Actor
        public function actors()
        {
            return $this->belongsToMany(Actor::class);
        }
}
