<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class applicationReply extends Model
{
    protected $fillable = [

    	'application_id',
    	'user_id',
    	'email',
    	'body',
    	'is_active'

    ];

    public function application(){
    	
    	return $this->belongsTo('App\Application');
    }
}
