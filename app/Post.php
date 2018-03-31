<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Post extends Model
{
    protected $fillable = [
      'title',
      'body',
      'photo_id',
      'user_id',
      'category_id',
      'date_start',
      'location'
    ];

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function photo(){
      return $this->belongsTo('App\Photo');
    }

    public function category(){
      return $this->belongsTo('App\Category');
    }




}
