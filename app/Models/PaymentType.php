<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    public function Factor(){
        return $this->hasMany('App\Models\Factor');
    }
}
