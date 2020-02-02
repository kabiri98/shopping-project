<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Transactoin extends Model
{
    public function Factor(){
        return $this->belongsTo('App\Models\Factor');
    }

    public function Shipping(){
        return $this->belongsTo('App\Models\Shipping');
    }

    public function Verification(){
        return $this->belongsTo('App\Models\Verification');
    }


    public function ReferedProduct(){
        return $this->hasMany('App\Models\ReferedProduct');
    }

}
