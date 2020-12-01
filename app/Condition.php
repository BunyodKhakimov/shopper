<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    public function item()
    {
        $this->hasMany('App\Item');   
    }
}
