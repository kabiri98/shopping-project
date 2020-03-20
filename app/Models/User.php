<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class User extends Model
{
    public $timestamps=false;

    public function Gender(){
        return $this->belongsTo('App\Models\Gender');
    }

    public function Discount(){
        return $this->belongsTo('App\Models\Discount');
    }

    public function Role(){
        return $this->belongsToMany('App\Models\Role');
    }


    public function Address(){
        return $this->hasMany('App\Models\Address');
    }

    public function Favorit(){
        return $this->hasMany('App\Models\Favorit');
    }

    public function Basket(){
        return $this->hasMany('App\Models\Basket');
    }

    public function Factor(){
        return $this->hasMany('App\Models\Factor');
    }



}
