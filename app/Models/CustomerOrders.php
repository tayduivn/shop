<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerOrders extends Model
{
    protected $table = "customer_orders";

    public function customer()
    {
    	return $this->belongsTo('App\Models\Customer','customer_id','id');
    }

    public function customer_order_detail()
    {
    	return $this->hasMany('App\Models\CustomerOrderDetail','order_id','id');
    }
}
