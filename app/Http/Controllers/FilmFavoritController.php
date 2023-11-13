<?php

namespace App\Http\Controllers;

use App\Models\FilmFavorit;
use Illuminate\Http\Request;

class FilmFavoritController extends Controller
{
    public function index()
    {
        return view('film.all', ["title" => "Film Favorit", "films" => FilmFavorit::all()]);
    }

    public function show($film)
    {
        return view('film.detail', ["title" => "Film Favorit Detail", "films" => FilmFavorit::find($film)]);
    }
}
