<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_products';

    protected $fillable = ['order_product_id','order_id','product_id','name','model','quantity','price','total'];
}
