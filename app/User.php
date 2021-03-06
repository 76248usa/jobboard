<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\Photo;
use App\Post;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id', 'is_active', 'photo_id', 'post_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
      return $this->belongsTo('App\Role');
    }

    public function photo() {
      return $this->belongsTo('App\Photo');
    }

    public function application() {
      return $this->hasOne('App\Application');
    }

    // public function setPasswordAttribute($password) {
    //   if(!empty($password)){
    //     return $this->attributes('password') = bcrypt($password);
    //   }
    //}

      public function posts(){
        return $this->hasMany('App\Post');
      }


    // public function isAdmin(){
    //   if($this->role->name == 'administrator'){
    //     return true;
    //
    //   }
    //     return false;
    //
    // }

}
