<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index()
    {
        return view('actor.all', ["title" => "Aktor Film", "actors" => Actor::all()]);
    }

    public function show($actor)
    {
        return view('actor.detail', ["title" => "Aktor Film Detail", "actors" => Actor::find($actor)]);        
    }
}
