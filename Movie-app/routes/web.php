<?php

use App\Http\Controllers\GenresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
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
    return view('index');
}); //hapus ini di pertemuan 12

//MOVIESS

Route::get('/movies',[MovieController::class, 'index']);

Route::get('/movies/create', [MovieController::class, 'create']);

Route::post('/movies', [MovieController::class, 'store']);

Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

Route::get('/movies/{movie}/edit', [MovieController::class, 'edit']); //menampilkan Edit

Route::put('/movies/{movie}', [MovieController::class, 'update']);

Route::get('/', [HomeController::class, 'index']); //Naikin ke atas

// ketik ini Route::resource('/movies', MovieController::class);



//GENRES

Route::get('/genres',[GenresController::class, 'genres']);

Route::get('/genres/create', [GenresController::class, 'create']);

Route::post('/genres', [GenresController::class, 'store']);

Route::delete('/genres/{genres}', [GenresController::class, 'destroy']);





Route::get('/reviews',[ReviewController::class, 'review']);

Route::get('/reviews/create', [ReviewController::class, 'create']);

Route::post('/reviews', [ReviewController::class, 'store']);

Route::delete('/review/{review}', [ReviewController::class, 'destroy']);











Route ::get('/user', function () {
    return view('user/user');
});