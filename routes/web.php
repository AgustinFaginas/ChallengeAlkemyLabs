<?php

use Illuminate\Support\Facades\Route;



Route::get('login' , 'WelcomeController@login')->name('welcome.login');

Route::get('category/{id}' , 'WelcomeController@show')->name('welcome.show_category');


Route::get('/' , 'WelcomeController@index')->name('welcome.index');


Route::get('initSession' , 'WelcomeController@initSession')->name('welcome.initSession');


Route::get('me/home' , 'HomeController@index')->name('apps.index');


Route::get('me/apps/{id}',  'HomeController@show')->name('apps.show');


Route::get('me/apps/create',  'HomeController@create')->name('apps.create');



Route::get('registrarse' , 'RegistrarseController')->name('registrarse');
