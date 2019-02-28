<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerOrderDetail extends Model
{
    protected $table = "customer_order_detail";

    protected $fillable = [
        'product_id','order_id','quantity','price'
    ];

    public $timestamps = false;

    public function customer_orders()
    {
    	return $this->belongsTo('App\Models\CustomerOrders','order_id','id');
    }

    public function product()
    {
    	return $this->belongsTo('App\Models\Product','product_id','id');
    }
}
