<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lga', 'mobile', 'dob', 'role_id', 'status_id', 'photo_id', 'position',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

    public function isAdmin(){
        if ($this->roles->name == 'Admin' && $this->status->name == 'Active'){
            return true;
        }
    }

//    public function setNameAttribute(){
//        return
//    }
}
