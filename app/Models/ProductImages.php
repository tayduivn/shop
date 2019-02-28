<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    protected $table = "product_images";

    protected $fillable = [
        'link', 'product_id'
    ];

    public $timestamps = false;

    public function product()
    {
    	return $this->belongsTo('App\Models\Product','product_id','id');
    }

}
