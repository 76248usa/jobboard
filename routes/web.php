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

Route::get('/teacher', function () {
	$categories = Category::all();
    return view('teacher', compact('categories'));
});

Auth::routes();

Route::get('/post/{id}',['as'=>'home.post', 'uses'=> 'AdminPostsController@post']);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/download',['as'=>'download', 'uses'=>'DownloadController@downfunc']);


Route::group(['middleware'=>'admin'], function(){

  Route::resource('/admin/users', 'AdminUsersController');

  Route::resource('/admin/posts', 'AdminPostsController');

  Route::resource('/admin/categories', 'AdminCategoriesController');

  Route::resource('/admin/media', 'AdminMediasController');

  Route::resource('/admin/applications', 'AdminApplicationsController');

  //Route::resource('/admin/application/replies', 'ApplicationsRepliesController');

});

Route::resource('/teacher', 'TeachersController');

Route::resource('/teachers/{teacher}/application', 'TeachersController');



//Route::get('/admin/applications/create', 'TeachersController@create');

 




// Route::get('admin/posts/{post}/edit', [ 'as' => 'posts.edit', 'uses' => 'AdminPostsController@edit']);

// Route::get('/edit/', [ 'as' => 'posts.edit', 'uses' => 'AdminPostsController@edit']);




// Route::get('admin/posts/{user}/edit', [ 'as' => 'posts.edit', 'uses' => 'AdminPostsController@edit']);

Route::get('/admin', function(){

  $user = Auth::user();
  $count_users = User::count();
  $count_applications = Application::count();
  $count_cat = Category::count();
  $count_posts = Post::count();

  //$photo = $user->photo->file;

  return view('admin.index', compact('user','count_users','count_cat','count_applications','count_posts'));
});
