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
//     return view('welcome');
// });

Auth::routes();
// DEFINIAMO LE ROTTE PUBBLICHE
Route::get('/posts', 'PostController@index')->name('posts.index');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin') // prefisso rotte
    ->namespace('Admin') // namespace delle cartelle
    ->middleware('auth') // filtro per autenticazione
    ->name('admin.') //prefisso di tutti i nomi delle rotte
    ->group(function () {


    // qui dentro ci sarà tutto l'admin panner
    // Route::namespace('Admin');
    
    Route::resource('posts', 'PostController');

    // Route::get('profile', 'ProfileController@index');

});