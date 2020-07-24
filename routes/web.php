<?php

use App\Http\Controllers\PostsController;
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
//     return view('welcome');
// });

//PagesController`s Routes
Route::get('/', 'PagesController@index');
Route::post('index', 'ContactsController@store');

//PostsController`s Routes
Route::get('blog', 'PostsController@index');
Route::get('create', 'PostsController@create');
Route::post('create', 'PostsController@store');
Route::post('update/{$post->id}', 'PostsController@edit');
Route::get('show', 'PostsController@show');
Route::get('blog/{post}', 'PostsController@show');
Route::get('blog/{post}/edit', 'PostsController@edit');
Route::patch('blog/{post}', 'PostsController@update');
Route::delete('blog/{post}', 'PostsController@destroy');

//ContactsController`s Routes
Route::get('request', 'ContactsController@index');
Route::get('request/{contact}', 'ContactsController@show');
Route::delete('request/{contact}', 'ContactsController@destroy');

//Auth
Auth::routes();

Route::get('/create', 'HomeController@index')->name('create');
