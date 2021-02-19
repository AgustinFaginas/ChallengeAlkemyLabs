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

Route::get('login' , 'WelcomeController@login')->name('welcome.login');

Route::get('/' , 'WelcomeController@index')->name('welcome.index');

Route::get('initSession' , 'WelcomeController@initSession')->name('welcome.initSession');


Route::get('me/home' , 'HomeController@index')->name('apps.index');
Route::get('me/apps/{id}',  'HomeController@show')->name('apps.show');
Route::get('me/apps/create',  'HomeController@create')->name('apps.create');

Route::get('registrarse' , 'RegistrarseController')->name('registrarse');
