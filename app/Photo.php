<?php

namespace App;
use App\User;
use App\Application;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  // protected $uploads = 'http://localhost:8888/jobboard/public/images/';

  protected $fillable = [

    'file',
    'application_id'

  ];

  
    
  }

  //public function getFileAttribute($photo){
    //return $this->uploads . $photo;
  //}
  // public function application(){

  // 	$this->hasOne('App\Application');

  // }

