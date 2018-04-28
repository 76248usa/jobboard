<?php

namespace App;

use App\Post;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
    	'applicant',
        'user_id',
        'post_id',
    	'address',
    	'email',
    	'body',
    	'file',
    	'is_active'
    ];

    public function user(){
        return $this->belongsTo('App\User');
      }
}
