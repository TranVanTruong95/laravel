<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   	protected $table = 'order';

   	protected $fillable = ['order_id','customer_id','firstname','lastname','email','phone','address','payment_method','total','status','date_added','date_modified'];
}
