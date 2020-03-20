<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class FactorProduct extends Model
{
    public function Factor(){
        return $this->belongsTo('App\Models\Factor');
    }

    public function Product(){
        return $this->belongsTo('App\Models\Product');
    }
}
