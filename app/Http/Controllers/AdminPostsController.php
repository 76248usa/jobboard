<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostsCreateRequest;
use Illuminate\Support\Facades\Auth;
use App\Post; 
use App\Category;
use App\User;
use App\Application;


class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

      $user = Auth::user();
      $posts = Post::all();
      $count_users = User::count();
      $count_applications = Application::count();
      $count_cat = Category::count();
      $count_posts = Post::count();

      return view('admin.posts.index', compact('posts', 'user','count_users','count_cat','count_applications','count_posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $categories = Category::pluck('name', 'id')->all();
      $user = Auth::user();

      $count_users = User::count();
      $count_applications = Application::count();
      $count_cat = Category::count();
      $count_posts = Post::count();

        return view('admin.posts.create', compact('categories', 'user','count_users','count_cat','count_applications','count_posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsCreateRequest $request)
    {
        $user = Auth::user();

        $input = $request->all();

        $user->posts()->create($input);

        return redirect('/admin/posts');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        

    }

    public function post($id){

    $post = Post::findOrFail($id);

        return view('teacher.single_post', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $post = Post::findOrFail($id);

        $categories = Category::pluck('name', 'id')->all();

        $count_users = User::count();
      $count_applications = Application::count();
      $count_cat = Category::count();
      $count_posts = Post::count();

        return view('admin.posts.edit', compact('post', 'categories', 'user', 'count_users','count_cat','count_applications','count_posts'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostsCreateRequest $request, $id)
    {
        $input = $request->all();

        Auth::user()->posts()->whereId($id)->first()->update($input);

        return redirect('/admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect('admin/posts');
    }
}
