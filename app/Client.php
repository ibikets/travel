<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    protected $fillable = ['role_id', 'status_id', 'photo_id', 'ticket_id', 'name', 'email', 'dob', 'passport_no', 'expiry_date', 'issue_date', 'mobile'];

    public function ticket(){
        return $this->belongsTo('App\Ticket');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
