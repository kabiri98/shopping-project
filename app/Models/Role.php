<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function Permission(){
        return $this->belongsTo('App\Models\Permission');
    }

}
