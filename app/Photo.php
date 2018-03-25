<?php

namespace App;
use App\User; 

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $uploads = 'http://localhost:8888/jobboard/public/images/';

  protected $fillable = [
    'file'
  ];

  public function getFileAttribute($photo){
    return $this->uploads . $photo;
  }


}
