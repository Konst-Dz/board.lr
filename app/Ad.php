<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Ad extends Model
{

    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
}
