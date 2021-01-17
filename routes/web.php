<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*use App\Http\Controllers\PageController;
    //Route::get('/', [PageController::class, 'home']);
    Route::get('/home', [PageController::class, 'home']);
    Route::get('/about', [PageController::class, 'about']);
    Route::get('/contacts', [PageController::class, 'contacts']);
*/

   /* use App\Http\Controllers\WebController;
    Route::get('/master', [WebController::class, 'master']);
    Route::get('/nav', [WebController::class, 'nav']);
    Route::get('/about', [WebController::class, 'about']);
    Route::get('/list', [WebController::class, 'list']);*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

   use App\Http\Controllers\MovieController;
    Route::get('/movie', [MovieController::class, 'moviez']);
    Route::get('/list', [MovieController::class, 'list']);

//movie page
Route::resource('/movie','MovieController');
Route::get('/movie', 'MovieController@moviez');
Route::post('/movie/{id}', ['uses' => 'MovieController@flip']);
// Route::post('/filter', 'MovieController@moviez');

//My List page
Route::resource('/list', 'ListController');
Route::get('/list', 'ListController@list');
Route::post('/list/{id}', ['uses' => 'ListController@flip']);