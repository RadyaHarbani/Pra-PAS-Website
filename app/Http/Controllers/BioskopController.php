<?php

namespace App\Http\Controllers;

use App\Models\Bioskop;
use Illuminate\Http\Request;

class BioskopController extends Controller
{
    public function index()
    {
        return view('bioskop.all', ["title" => "Bioskop Indonesia", "bioskops" => Bioskop::all()]);
    }

    public function show($bioskop)
    {
        return view('bioskop.detail', ["title" => "Bioskop Indonesia Detail", "bioskops" => Bioskop::find($bioskop)]);
    }
}
