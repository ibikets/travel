<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    protected $fillable = ['role_id', 'status_id', 'photo_id', 'ticket_id', 'firstname', 'othername', 'lastname', 'gender', 'email', 'dob', 'passport_no', 'expiry_date', 'issue_date', 'mobile'];

    public function ticket(){
        return $this->belongsTo('App\Ticket','ticket_id','id');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
