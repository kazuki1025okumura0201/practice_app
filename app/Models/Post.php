<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'quiz_correct',
    ];

    public function pokemons()
    {
        return $this->belongsToMany(Pokemon::class);
    }
}
