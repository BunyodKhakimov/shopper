<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function item()
    {
        $this->hasMany('App\Item');   
    }
}
