<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
      use HasFactory;
      protected $fillable = ['id' , 'product_order_id' , 'user_order_id' , 'order_name' , 'order_description' , 'order_image'];
      public function product()
      {
         return $this->belongsTo(Product::class, 'product_order_id');
      }
      public function users()
      {
         return $this->belongsTo(User::class , 'user_order_id');
      }
}
