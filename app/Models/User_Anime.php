<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Anime extends Model
{
    use HasFactory;

    protected $table = 'user_anime';

    protected $primaryKey = ['user_id', 'anime_id'];

    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'anime_id',
        'watch_status',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function anime()
    {
        return $this->belongsTo(Anime::class, 'anime_id', 'id');
    }
}
