<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_detail";

    protected $fillable = [
        'product_id','order_id','quantity','price'
    ];

    public $timestamps = false;

    public function orders()
    {
    	return $this->belongsTo('App\Models\Orders','order_id','id');
    }

    public function product()
    {
    	return $this->belongsTo('App\Models\Product','product_id','id');
    }
}
