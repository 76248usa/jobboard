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
    return view('layout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/users/create', [ 'as' => 'users.create', 'uses' => 'AdminUsersController@create']);

Route::get('admin/users/{user}/edit', [ 'as' => 'users.edit', 'uses' => 'AdminUsersController@edit']);

Route::delete('/admin/users/{user}', ['as' => 'users.destroy', 'uses' =>'AdminUsersController@destroy']);

Route::get('admin/users/{user}',['as' => 'users.show', 'uses' =>'AdminUsersController@show']);

//Route::get('/admin/users/{user}/edit', 'AdminUsersController@edit');
Route::group(['middleware'=>'admin'], function(){

  Route::resource('/admin/users', 'AdminUsersController');

  Route::resource('/admin/posts', 'AdminPostsController');

  Route::resource('/admin/categories', 'AdminCategoriesController');
});

// Route::get('admin/posts/{post}/edit', [ 'as' => 'posts.edit', 'uses' => 'AdminPostsController@edit']);

Route::get('/edit/', [ 'as' => 'posts.edit', 'uses' => 'AdminPostsController@edit']);




// Route::get('admin/posts/{user}/edit', [ 'as' => 'posts.edit', 'uses' => 'AdminPostsController@edit']);





Route::get('/admin', function(){
  return view('admin.index');
});
