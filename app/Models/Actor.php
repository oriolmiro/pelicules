<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;
        // Els atributs assignables en massa
        protected $fillable = ['name', 'birth_date', 'image'];

        // Relació many-to-many amb Movie
        public function movies()
        {
            return $this->belongsToMany(Movie::class);
        }
}
