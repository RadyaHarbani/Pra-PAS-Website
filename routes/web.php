<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\BioskopController;
use App\Http\Controllers\FilmFavoritController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('layouts.homePage');
});

Route::get('/films/all', [FilmFavoritController::class, 'index']);
Route::get('/films/detail/{film}', [FilmFavoritController::class, 'show']);

Route::get('/bioskops/all', [BioskopController::class, 'index']);
Route::get('/bioskops/detail/{bioskop}', [BioskopController::class, 'show']);

Route::get('/actors/all', [ActorController::class, 'index']);
Route::get('/actors/detail/{actor}', [ActorController::class, 'show']);
