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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/posts', 'PostController@index')->name('post.home');
Route::get('/post/{post:slug}', 'PostController@show')->name('post.show');
Route::post('/like', 'LikeController@store');
Route::post('/unlike', 'LikeController@destroy');

Route::post('/comment', 'CommentController@store')->name('comment.store');
Route::post('/comment/{comment:slug}', 'CommentController@update')->name('comment.update');

