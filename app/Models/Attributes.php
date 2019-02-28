<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    protected $table = "attributes";

    protected $fillable = [
    	'name','value','type'

    ];

    public function product_attribute()
    {
    	return $this->hasMany('App\Models\ProductAttribute','attribute_id','id');
    }
}
