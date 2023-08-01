<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_url',
        'episodes',
        'release_date',
    ];

    public function lists()
    {
        return $this->hasMany(AnimeList::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'anime_genre', 'genre_id', 'anime_id');
    }
}
