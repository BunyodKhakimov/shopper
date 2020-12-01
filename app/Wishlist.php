<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
	public function user()
    {
        $this->belongsTo('App\User');   
    }

    public function items()
    {
        $this->hasMany('App\Item');   
    }
}
