<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    public function City(){
        return $this->belongsTo('App\Models\City');
    }

}
