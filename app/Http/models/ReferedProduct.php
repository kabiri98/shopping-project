<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ReferedProduct extends Model
{
    public function Product(){
        return $this->belongsTo('App\Models\Product');
    }

    public function Transactoin(){
        return $this->belongsTo('App\Models\Transactoin');
    }
}
