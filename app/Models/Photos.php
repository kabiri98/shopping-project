<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    //bekhatere fillable hast
    public $fillable = ['path', 'imagable_id'];
    
    public function Imageable()
    {
        return $this->morphTo();
    }
}
