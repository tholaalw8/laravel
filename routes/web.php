<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/','PagesController@home')->middleware('auth');

Route::get('/ticket','TicketsController@index');
Route::get('/contact','TicketsController@create')->middleware('permission:edit ticket');;
Route::get('/createMovie','MoviesController@create')->middleware('roles:manager');


Route::get('/movie','MoviesController@index');

Route::get('/ticket/{slug?}','TicketsController@show')->middleware('auth');;
Route::get('/movie/{slug?}','MoviesController@show')->middleware('auth');;


Route::get('/ticket/{slug?}/edit','TicketsController@edit')->middleware('permission:edit ticket');
Route::get('/movie/{slug?}/edit','MoviesController@edit')->middleware('auth');


Route::post('/contact','TicketsController@store');
Route::post('/createMovie','MoviesController@store');
Route::post('/ticket/{slug?}/edit','TicketsController@update');
Route::post('/movie/{slug?}/edit','MoviesController@update');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy')->middleware('auth');;
Route::post('/movie/{slug?}/delete','MoviesController@destroy')->middleware('auth');;

Route::post('/comment','CommentsController@newComment')->middleware('auth');;


Route::group(array('prefix' => 'admin','namespace' => 'Admin', 'middleware' => 'roles:manager'), function(){

    Route::get('users','UsersController@index');
    Route::get('roles','RolesController@index');
    Route::get('roles/create','RolesController@create');
    Route::post('roles/create','RolesController@store');

    Route::get('users/{id?}/edit','UsersController@edit');
    Route::post('users/{id?}/edit','UsersController@update');

    Route::get('/','PagesController@home');


    Route::get('posts','PostsController@index');
    Route::get('posts/create','PostsController@create');
    Route::post('posts/create','PostsController@store');
    Route::get('posts/{id?}/edit','PostsController@edit');
    Route::post('posts/{id?]/edit','PostsController@update');

    Route::get('categories','CategoriesController@index');
    Route::get('categories/create','CategoriesController@create');
    Route::post('categories/create','CategoriesController@store');

});





















