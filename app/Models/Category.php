<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Bproduct(){
        return $this->belongsToMany('App\Models\Bproduct');
    }
}
