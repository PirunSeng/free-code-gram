<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcomeMail;

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

Auth::routes();

Route::get('/email', function() {
  return new NewUserWelcomeMail();
});

Route::get('/profiles/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profiles/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profiles/{user}', 'ProfilesController@update')->name('profile.update');

// order of routes matter. e.g create cannot come after show or it will be considered as show, 404.
Route::get('/', 'PostsController@index');
Route::get('/p/create', 'PostsController@create');
Route::get('/p/{post}', 'PostsController@show');
Route::post('/p', 'PostsController@store');

Route::post('follow/{user}', 'FollowsController@store');