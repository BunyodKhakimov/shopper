<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function company()
    {
        $this->belongsTo('App\Company');   
    }

    public function category()
    {
        $this->belongsTo('App\Category');   
    }

    public function brand()
    {
        $this->belongsTo('App\Brand');   
    }

    public function rewiews()
    {
        $this->hasMany('App\Review');   
    }
}
