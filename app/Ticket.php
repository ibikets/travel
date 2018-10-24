<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //

    protected $fillable = ['client_id', 'airline_id', 'from', 'to', 'ticket_ref', 'airline_ref', 'ticket_type', 'purchase_date', 'departure_date', 'departure_time', 'return_date', 'return_time', 'actual_cost', 'paid'];

    public function client(){
        return $this->belongsTo('App\Client');
    }

    public function airline(){
        return $this->belongsTo('App\Airline');
    }

//    public function getDepartureDateAttribute($value){
//        return Carbon::parse($value)->format('d-M-Y');
//    }
//
//    public function getReturnDateAttribute($value){
//        return Carbon::parse($value)->format('d-M-Y');
//    }
}
