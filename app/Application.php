<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Photo;
use App\User;

class Application extends Model
{
    protected $fillable = [
    	'applicant',
      'post_id',
      'user_id',
      'photo_id',
    	'address',
    	'email',
    	'body',
    	'file',
    	'is_active'
    ];

    public function post(){
        return $this->belongsTo('App\Post');
      }

      public function user(){
        return $this->belongsTo('App\User');
      }

      public function photo(){
        return $this->belongsTo('App\Photo');
      }
}
