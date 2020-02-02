<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Bcategory extends Model
{
    public function Product(){
        return $this->belongsToMany('App\Models\Product');
    }

    public function Category(){
        return $this->belongsToMany('App\Models\Category');
    }

}
