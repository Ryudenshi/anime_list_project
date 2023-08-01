<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime_Genre extends Model
{
    use HasFactory;

    protected $table = 'anime_genre';

    protected $primaryKey =['anime_id', 'genre_id'];

    public $incrementing = false;

    protected $fillable = [
        'anime_id',
        'genre_id',
    ];

    public function anime()
    {
        return $this->belongsTo(Anime::class, 'anime_id', 'id');
    }

    public function genres()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }
}
