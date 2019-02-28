<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = "product_attribute";

    protected $fillable = [
    	'product_id','attribute_id'
    ];

    public $timestamps = false;

    public function product()
    {
    	return $this->belongsTo('App\Models\Product','product_id','id');
    }

    public function attributes()
    {
    	return $this->belongsTo('App\Models\Attributes','attribute_id','id');
    }
}
