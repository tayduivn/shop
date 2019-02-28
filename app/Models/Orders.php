<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = "orders";

    public function user()
    {
    	return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function order_detail()
    {
    	return $this->hasMany('App\Models\OrderDetail','order_id','id');
    }
}
