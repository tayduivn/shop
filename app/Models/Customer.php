<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";
    protected $fillable = [
        'name', 'phone', 'address','gender'
    ];

    public function customer_orders()
    {
        return $this->hasMany('App\Models\CustomerOrders','customer_id','id');
    }


}
