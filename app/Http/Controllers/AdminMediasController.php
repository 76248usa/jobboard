<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Auth;

class AdminMediasController extends Controller
{
    public function index(){

    	$photos = Photo::all();
        $user = Auth::user();

    	return view('admin.media.index', compact('photos', 'user'));
    }

    public function create() {

    	return view('teacher.single_post');
    }

    public function store(Request $request){

    	 $file = $request->file('file');

    	 $name = time() . $file->getClientOriginalName();

    	 $file->move('images', $name);

    	Photo::create(['file'=>$name]);

    }

    public function destroy($id){

    	$photo = Photo::findOrFail($id);

    	//unlink(public_path() . $photo-file);

    	$photo->delete();

    	return redirect('admin/media');

    }
}
