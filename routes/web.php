<?php

use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

//Route::get('/admin', 'Admin\HomeController@index')->name('admin.index');
Route::get('/admin', function(){
    return view('pages.admin.home');
})->name('home');
Route::get('/', function(){
    return redirect()->route('login');
});

Route::get('/registro', 'Auth\RegisterController@index')->name('registro');
Route::post('/crear', 'Auth\RegisterController@create')->name('crear');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route Profile
Route::get('/profile', 'Home\ProfileController@index')->name('home.profile');
Route::put('/profile/{user}', 'Home\ProfileController@update')->name('profile.update');
Route::get('/reporteDeSalud/{header:slug}', 'Home\ProfileController@editReporte')->name('profile.editReporte');

//Route Elections
Route::get('/{slug}', 'Home\ElectionController@index')->name('election.index');
