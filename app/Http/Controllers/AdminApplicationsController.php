<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

        $photos = Photo::all();

        $applications = Application::all();

        $count_users = User::count();
        $count_applications = Application::count();
        $count_cat = Category::count();
        $count_posts = Post::count();


        

        //$posts = Post::where("user_id", "=", $user->id)->get();

        //$applications = Application::all()->where('post_id', $posts->id);

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
    public function store(Request $request)
    {
        $user = Auth::user();

        $input = $request->all();

        $photo = $request->input('photo_id');

        //$photo = $request->file('photo_id');

        //dd($photo);

         if($file = $request->file('photo_id')){

          $name = time(). $file->getClientOriginalName();

          $file->move('images', $name);

          $photo = Photo::create(['file'=>$name]);

          $input['photo_id'] = $photo->id;
        } 

        //$photo = Application::find(1)->photo; 
        $user->application()->create($input); 

        Session::flash('application_message', 'You application was successfully submitted!');
        
        return redirect('/');






          // $this->validate($request,[
            
          //    'applicant' => 'required',
          //    'email' => 'required',
          //    'address' => 'required',
          //    'body' => 'required',

          //    ]);

         //    $input = [
            
         //     'user_id' => $user->id,
         //    'post_id' => $request->post_id,
         //     'is_active' => 1,
         //     'applicant' => $user->name,
         //     'email' => $user->email,
         //     //'photo_id' => $photo,
         //     'address' => $request->address,
         //     'body' => $request->body,


         //    ];

         // $user->application()->create($input);

         // echo "done!";

          //   //dd($input); 
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

        $applications = $post->applications;

        $photos = $post->applications->photos;

        return view('admin.applications.show', compact('applications', 'photos')); 

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
