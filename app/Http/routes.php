<?php
Route::get('/', function(){
    return view('login');
});
Route::get('/welcome', 'WelcomeController@welcome');
Route::resource('changes','ChangesController');
Route::resource('admins','AdminController');
Route::get('/changes/about', 'ChangesController@about');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/services','PagesController@services');
Route::get('/gallery','PagesController@gallery');
Route::get('/category','PagesController@category');
Route::get('/index','PagesController@index');



