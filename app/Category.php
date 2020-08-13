<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function ad()
    {
        return $this->hasMany('App\Ad','category_id');
    }
}
