<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();
    
    Route::get('/redirect', '\App\Http\Controllers\Auth\LoginController@redirectToProvider');
    
    Route::get('/callback', '\App\Http\Controllers\Auth\LoginController@handleProviderCallback');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/comment/store', 'App\Http\Controllers\CommentController@store')->name('comment.add');
