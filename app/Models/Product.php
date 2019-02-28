<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    public function category()
    {
    	return $this->belongsTo('App\Models\Category','category_id','id');
    }

    public function comment()
    {
    	return $this->hasMany('App\Models\Comment','product_id','id');
    }

    public function product_images()
    {
    	return $this->hasMany('App\Models\ProductImages','product_id','id');
    }

    public function product_attribute()
    {
        return $this->hasMany('App\Models\ProductAttribute','product_id','id');
    }
}
