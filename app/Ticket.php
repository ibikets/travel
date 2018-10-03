<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //

    protected $fillable = ['client_id', 'airline', 'purchase_date', 'departure_date', 'arrival_date', 'actual_cost', 'paid'];

    public function client(){
        return $this->belongsTo('App\Client');
    }

    public function airline(){
        return $this->belongsTo('App\Airline');
    }




}
