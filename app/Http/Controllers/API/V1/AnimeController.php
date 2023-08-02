<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\AnimeResource;
use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $anime = Anime::with('genres')->get();

        return response()->json(AnimeResource::collection($anime));
    }
}
