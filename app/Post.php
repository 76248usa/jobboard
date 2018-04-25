<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\File;
use App\Application;


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

    public function files(){
        return $this->hasMany('App\File');
      }

    public function application(){
        return $this->belongsTo('App\Application');
      }




}
