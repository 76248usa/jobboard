<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = [
    	'name',
    	'email',
    	'phone',
    	'body',
    	'careerpage'
	];
}
