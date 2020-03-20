<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function User(){
        return $this->hasMany('App\Models\User');
    }
}
