<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
use App\Application;
use App\User;
use App\Post;
use Auth;

class AdminCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        response()->json($categories);
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

        return view('admin.categories.index', compact('categories','user','count_users','count_cat','count_applications','count_posts'));
    
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
         

        $input = $request->all();

        // $category = new Category;
        // $category->name = $request->input('name');
        // $category->save();

        // response()->json($category);

        $category = Category::create($input);

        return redirect('/admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        response()->json($category);

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

        return view('admin.categories.edit', compact('category','user', 'count_users','count_cat','count_applications','count_posts'));
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
        $input = $request->all();

        $category = Category::findOrFail($id);
        response()->json($category);

        $category->update($input);

        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        response()->json($category);

        $category->delete();

        return redirect('/admin/categories');
    }
}
