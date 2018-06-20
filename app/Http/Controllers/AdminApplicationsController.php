<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ApplicationRequest;
use App\Application;
use App\Category;
use App\User;
use App\Post;
use App\Photo;
use Auth;


class AdminApplicationsController extends Controller
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

        $photos = Photo::all();
        response()->json($photos);

        $applications = Application::all();
        response()->json($applications);

        $count_users = User::count();
        response()->json($count_users);
        $count_applications = Application::count();
        response()->json($count_applications);
        $count_cat = Category::count();
        response()->json($count_cat);
        $count_posts = Post::count();
        response()->json($count_posts);

        return view('admin.applications.index', compact('applications', 'photos', 'user', 'count_users','count_cat','count_applications','count_posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.single_post'); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationRequest $request)
    {
       
        $user = Auth::user();
        response()->json($user);

        $input = $request->all();

        $photo = $request->input('photo_id');

         if($file = $request->file('photo_id')){

          $name = time(). $file->getClientOriginalName();

          $file->move('images', $name);

          $photo = Photo::create(['file'=>$name]);

          $input['photo_id'] = $photo->id;
        } 

        $user->application()->create($input); 

        return view('teacher.thankyou');




          
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        response()->json($post);

        $applications = $post->applications;
        response()->json($applications);

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
 
        return view('admin.applications.show', compact('applications','user','post', 'count_users','count_cat','count_applications','count_posts'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
