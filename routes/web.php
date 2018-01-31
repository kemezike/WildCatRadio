<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/','SessionsController@main');

Route::get('/apiChat','ChatController@getChat');

Route::post('/chat','ChatController@store');

Route::get('/chat', 'ChatController@getChat');

Route::post('/register', 'RegistrationController@store');

Route::get('/home', 'HomeController@index')->name('home');
