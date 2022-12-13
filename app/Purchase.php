<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [

        'Provider_id',
        'user_id',
        'Purchase_date',
        'tax',
        'total',
        'status',
        'picture',
     ],

        public function user(){
            return $this->belongsTo(User::class);
        }

        public function Provider(){
            return $this->belongsTo(Provider::class);
        }

        public function purchaseDetails(){
            return $this->belongsTo(PurchaseDetails::class);
        }
   
}
