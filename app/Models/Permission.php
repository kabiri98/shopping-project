<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function Role(){
        return $this->belongsToMany('App\Models\Role');
    }
}
