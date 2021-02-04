<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//Auth
Auth::routes();
//Guest's pages
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');
//Recipes page
Route::get('/recipe', 'RecipeController@index')->name('recipe');
Route::get('/recipe/{id}', 'RecipeController@show')->name('recipe.show');

//User's pages
Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'namespace' => 'user',
    'middleware' => ['auth']
], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
//Admin's Pages
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => ['auth', 'admin']
], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
//HR's Pages
Route::group([
    'prefix' => 'hr',
    'as' => 'hr.',
    'namespace' => 'HR',
    'middleware' => ['auth', 'hr']
], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
//Staff's Pages
Route::group([
    'prefix' => 'staff',
    'as' => 'staff.',
    'namespace' => 'Staff',
    'middleware' => ['auth', 'staff']
], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
