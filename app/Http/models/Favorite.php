<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function Product(){
        return $this->belongsTo('App\Models\Product');
    }

    public function User(){
        return $this->belongsTo('App\Models\User');
    }

}
