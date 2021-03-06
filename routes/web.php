<?php

use App\Category;
use App\User;
use App\Application;
use App\Post;

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
  $posts = Post::all();
	$categories = Category::all();
    return view('teacher', compact('categories', 'posts'));
});

Route::resource('/employers', 'EmployersController');

Auth::routes();

Route::get('/post/{id}',['as'=>'home.post', 'uses'=> 'AdminPostsController@post']);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/teacher', 'TeachersController');

Route::resource('/teachers/{teacher}/application', 'TeachersController');

Route::resource('/applications', 'AdminApplicationsController');



Route::group(['middleware'=>'admin'], function(){

//Route::resource('/admin/users', 'AdminUsersController');

Route::resource('/admin/users/{user}/edit', 'AdminUsersController@edit');

//Route::resource('/admin/posts/{post}/edit', 'AdminPostsController@edit');

Route::resource('/admin/users', 'AdminUsersController');

//Route::resource('admin/users/index2/', [ 'as' => 'users.index', 'uses' => 'AdminUsersController@index']);


//Route::resource('/admin/users/{user}/edit', 'AdminUsersController@edit');

Route::get('/admin/users/{user}/edit/', [ 'as' => 'users.edit', 'uses' => 'AdminUsersController@edit']);

Route::resource('/admin/posts', 'AdminPostsController');

Route::get('admin/posts/{post}/edit/', [ 'as' => 'posts.edit', 'uses' => 'AdminPostsController@edit']);

Route::resource('/admin/categories', 'AdminCategoriesController');

Route::resource('/admin/media', 'AdminMediasController');

Route::get('/admin/download',['as'=>'download', 'uses'=>'DownloadController@downfunc']);

});

Route::get('/admin',function(){

  $user = Auth::user();

  $count_users = User::count();
  $count_applications = Application::count();
  $count_cat = Category::count();
  $count_posts = Post::count();

  return view('admin.index', compact('user','count_users','count_applications','count_cat','count_posts'));

});

Route::resource('employer', 'EmployersController');









