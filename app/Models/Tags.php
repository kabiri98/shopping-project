<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public function posts()
    {
        return $this->morphedByMany("App\Models\Posts","taggable");
    }
    public function product()
    {
        return $this->morphedByMany("App\Models\Product","taggable");
    }

    public function videos()
    {
        return $this->morphedByMany("App\Models\Videos","taggable");
    }
}
