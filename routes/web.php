<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;

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
    return view('welcome');
});

Route::get('/actors', [ActorController::class,'index'])->name('actors.index');
Route::post('/actors', [ActorController::class,'store'])->name('actors.store');
Route::get('/actors/create', [ActorController::class,'create'])->name('actors.create');
Route::get('/get-movies', [ActorController::class,'getMovies'])->name('actors.get-movies');
