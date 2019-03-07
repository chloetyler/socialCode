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

Route::get('/', function () {
    return view('/');
});

//------------------------------------------ADMIN ROUTES-------------------------------------------------------------
//ADMIN: show all users - the main update/delete/search page
Route::get('/admin/users/index', 'AdminController@index')->name('users');

//ADMIN: display page to edit a specific user
Route::get('/admin/users/{id}', 'AdminController@edit')->name('users');

//ADMIN: preform action to edit a specific user
//laravel looks for a variable called $id - finds it by name (this wouldn't work if I said {user_id} for example)
Route::patch('/admin/users/{id}', 'AdminController@update');

//ADMIN: display page to delete a specific user
Route::get('/admin/users/{id}/delete', 'AdminController@delete')->name('users');

//ADMIN: actually delete the specified user
Route::delete('/admin/users/{id}', 'AdminController@destroy')->name('users');

//ADMIN: search - display thr searched user on the index page
Route::get('/admin/users/searched/user/show', 'AdminController@search');



//------------------------------------------POST ROUTES-------------------------------------------------------------
//POSTS: when on the main/home page, display all posts
//goes to the index method on the post controller
Route::get('/', 'PostsController@index');

//POSTS: create a new post
Route::get('/posts/create', 'PostsController@create');

//POSTS: store a new post
Route::post('/posts', 'PostsController@store');

//ADMIN: display page to delete a specific user
Route::get('/posts/{id}/delete', 'PostsController@delete');

//ADMIN: actually delete the specified user
Route::delete('/posts/{id}/confirm', 'PostsController@destroy');

//------------------------------------------CATEGORY ROUTES----------------------------------------------------------

//goes to the index method on the CATEGORY controller
Route::get('/posts/categories', 'CategoryController@index');

//ADMIN: search - display thr searched user on the index page
Route::get('/posts/{id}' , 'CategoryController@show');

//------------------------------------------THEME ROUTES-------------------------------------------------------------
//THEME: show all themes - the main add/delete/ page
Route::get('/admin/themes/index', 'ThemesController@index');

//POSTS: create a new theme
Route::get('admin/themes/create', 'ThemesController@create');

//THEME: display page to edit a specific theme
Route::get('/admin/themes/{id}', 'ThemesController@edit');

//THEME: preform action to edit a specific theme
//laravel looks for a variable called $id - finds it by name (this wouldn't work if I said {user_id} for example)
Route::patch('/admin/themes/{id}', 'ThemesController@update');

//THEME: display page to delete a specific theme
Route::get('/admin/themes/{id}/delete', 'ThemesController@delete');

//THEME: actually delete the specified theme
Route::delete('/admin/themes/{id}', 'ThemesController@destroy');

//POSTS: store a new post
Route::post('/themes', 'ThemesController@store');



//------------------------------------------REGISTER ROUTES----------------------------------------------------------
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


