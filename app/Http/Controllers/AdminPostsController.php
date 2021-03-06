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
      response()->json($user);

      $posts = Post::all();
      response()->json($posts);
      $count_users = User::count();
      response()->json($count_users);
      $count_applications = Application::count();
      response()->json($count_applications);
      $count_cat = Category::count();
      response()->json($count_cat);
      $count_posts = Post::count();
      response()->json($count_posts);

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
      response()->json($user);
      $count_users = User::count();
      response()->json($count_users);

      $count_applications = Application::count();
      response()->json($count_applications);
      $count_cat = Category::count();
      response()->json($count_cat);
      $count_posts = Post::count();
      response()->json($count_posts);

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
        response()->json($user);

        //$input = $request->all();

        
        $post = new Post;
        $post->title = $request->input('title');
        $post->date_start = $request->input('date_start');
        $post->location = $request->input('location');
        $post->body = $request->input('body');


        $post->save();

        response()->json($post);
 
        //$user->posts()->create($input);

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
    response()->json($post);

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
        response()->json($user);
        $post = Post::findOrFail($id);
        response()->json($post);

        $categories = Category::pluck('name', 'id')->all();

        $count_users = User::count();
        response()->json($count_users);
      $count_applications = Application::count();
      response()->json($count_applications);
      $count_cat = Category::count();
      response()->json($count_cat);
      $count_posts = Post::count();
      response()->json($count_posts);


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
        response()->json($post);
        $post->delete();

        return redirect('admin/posts');
    }
}
