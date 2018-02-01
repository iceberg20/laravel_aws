<?php

Route::get('/', function () {
    return view('index');
});
Route::get('/studysection', 'StudySectionController@index')->name("all");
Route::get('/studysection/create', 'StudySectionController@create')->name("create");
Route::post('/studysections', 'StudySectionController@store');
Route::get('/studysection/{studysection}', 'StudySectionController@show');
Route::post('/studysection/{studysection}/goals','GoalsController@store');

Route::get('/config', 'Config@index');
Route::post('/config/set_daily_goal', 'Config@set_daily_goal');

Route::get('/report', 'Report@reports');

Route::get('/planning', 'Planning@planning');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/register', 'RegistrationController@create');
//Route::post('/register', 'RegistrationController@store')->name('register');

//Route::get('/login','SessionsController@create')->name('login');
//Route::post('/login','SessionsController@create')->name('login');
//Route::post('/logout','SessionsController@destroy')->name('logout');

