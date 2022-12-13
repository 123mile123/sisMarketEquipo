<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $filiable=[
       'code',
       'name',
       'stock',
       'image',
       'sell_price',
       'status',
       'category_id',
       'provider_id',

   ];

   public function category(){
        return $this->belongsto(Category::class);
   }

   public function provider(){
        return $this->belongsto(Provider::class);
   }
}
