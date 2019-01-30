<?php

use Illuminate\Support\Facades\Input;
use App\books;
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

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/books', 'formController@index');
// Route::get('/admins', 'AdminController@index');
Route::get('/members', 'formController@users');


	 // Route::prefix('admin')->group(function() {
  //   Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  //   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  //   Route::get('/', 'AdminController@index')->name('admin.dashboard');
  // });

Route::get('/about', 'formController@about');
Route::get('/create',  'formController@create');
Route::post('/create', ['as' => 'create', 'uses' => 'formController@store']);
Route::get('/borrow','formController@borrow');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/search','SearchController@SearchResults');