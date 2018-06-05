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
        $user = Auth::user();

        $categories = Category::all();
        
        $posts = Post::all();

        return view('teacher', compact('categories', 'posts', 'user'));
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
