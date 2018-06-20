<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Post;
use App\Application;
use App\Category;


class DownloadController extends Controller
{
    public function downfunc(){

    	$user = Auth::user();
    	response()->json($user);

    	$downloads = DB::table('photos')->get();

    	$count_users = User::count();
    	response()->json($count_users);
        $count_applications = Application::count();
        response()->json($count_applications);
        $count_cat = Category::count();
        response()->json($count_cat);
        $count_posts = Post::count();
        response()->json($count_posts);

    	return view('admin.download', compact('downloads','user', 'count_users','count_cat','count_applications','count_posts'));

    }

}
