<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public function User(){
        return $this->hasMany('App\Models\User');
    }

    public function Product(){
        return $this->hasMany('App\Models\Product');
    }

    public function Factor(){
        return $this->hasMany('App\Models\Factor');
    }


}
