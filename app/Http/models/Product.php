<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function Discount(){
        return $this->belongsTo('App\Models\Discount');
    }

    public function Bcategory(){
        return $this->belongsToMany('App\Models\Bcategory');
    }

    public function Favorit(){
        return $this->hasMany('App\Models\Favorit');
    }

    public function FactorProduct(){
        return $this->hasMany('App\Models\FactorProduct');
    }

    public function ReferedProduct(){
        return $this->hasMany('App\Models\ReferedProduct');
    }

    public function Basket(){
        return $this->hasMany('App\Models\Basket');
    }

    public function Image(){
        return $this->hasMany('App\Models\Image');
    }


}
