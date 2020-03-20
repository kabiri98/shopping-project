<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    public function Address(){
        return $this->hasMany('App\Models\Address');
    }

}
