<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function item()
    {
        $this->hasMany('App\Item');   
    }
}
