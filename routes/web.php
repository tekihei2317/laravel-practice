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

// Route::get('/', function () {
// return view('welcome');
// });

Auth::routes();
Route::get('/', 'App\Http\Controllers\ArticleController@index')->name('articles.index');
Route::resource('/articles', 'App\Http\Controllers\ArticleController')->except(['index', 'show'])->middleware('auth');
Route::resource('/articles', 'App\Http\Controllers\ArticleController')->only('show');
Route::prefix('articles')->name('articles.')->group(function () {
  Route::put('/{article}/like', 'App\Http\Controllers\ArticleController@like')->name('like')->middleware('auth');
  Route::delete('/{article}/like', 'App\Http\Controllers\ArticleController@unlike')->name('unlike')->middleware('auth');
});
