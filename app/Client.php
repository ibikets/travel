<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    protected $fillable = ['role_id', 'status_id', 'photo_id', 'ticket_id', 'firstname', 'othername', 'lastname', 'gender', 'email', 'dob', 'passport_no', 'expiry_date', 'issue_date', 'mobile'];

    public function ticket(){
        return $this->belongsTo('App\Ticket');
    }

    public function photo(){
        return $this->belongsTo('App\Photo');
    }

//    public function getDobAttribute($value){
//        return Carbon::parse($value)->format('d-M-Y');
//    }

    public function getFullNameAttribute()
    {
        return "{$this->firstname} {$this->othername} {$this->lastname}";
    }


    public function getSexAttribute(){
        $sex = $this->gender;
        return $sex == 'M' ? 'Male' : 'Female';
    }


}
