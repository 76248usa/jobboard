<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Post;
use App\Application;
use App\User;
use Alert;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        //$posts = Post::all();
        $posts = Post::all();

        return view('teacher', compact('categories', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $post = Post::all();

        //  $request->all();

        //   $user = Auth::user();

 
        //     $data = [
        //     'post_id' => $id,
        //     'user_id' => Auth::user()->id,
        //     'is_active' => 1,
        //     'applicant' => $user->name,
        //     'email' => $user->email,
        //     'file' => $user->name,
        //     'address' => $request->address,
        //     'body' => $request->body,

        // ];

        // return $data;

        // // $request->session()->flash('application created', 'Your application has been successfully created');

        // $user->application()->create($data);

        // redirect('/');
        

         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = Application::findOrFail($id);

        $photo = $application->photo;
        
        return view('teacher.application.show', compact('application', 'photo'));
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
