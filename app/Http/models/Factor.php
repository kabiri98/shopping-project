<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{

    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    public function Discount(){
        return $this->belongsTo('App\Models\Discount');
    }

    public function DeliveryType(){
        return $this->belongsTo('App\Models\DeliveryType');
    }
    public function PaymentType(){
        return $this->belongsTo('App\Models\PaymentType');
    }

    public function Transactoin(){
        return $this->hasMany('App\Models\Transactoin');
    }

    public function FactorProduct(){
        return $this->hasMany('App\Models\FactorProduct');
    }


}
