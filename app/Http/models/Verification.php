<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    public function Transactoin(){
        return $this->hasMany('App\Models\Transactoin');
    }


}
