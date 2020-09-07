<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'oders';
    protected $guarded = [''];

    public function product(){
    	return $this->belongsTo(Products::class,'or_product_id');
    }
}
