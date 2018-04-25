<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
    	'name'
	];

	public function post(){
		$this->belongsTo('App\Post');
	}
}
