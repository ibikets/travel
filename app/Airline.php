<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    //
    protected $fillable =['airline'];

    public function tickets(){
        return $this->hasMany('App\Ticket');
    }




}
