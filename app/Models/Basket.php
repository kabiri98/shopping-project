<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{

    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    public function Product(){
        return $this->belongsTo('App\Models\Product');
    }

}
