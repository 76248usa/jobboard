<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
    	'applicant',
    	'address',
    	'email',
    	'body',
    	'file'
    ];
}
