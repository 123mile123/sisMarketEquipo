<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $filiable=[
        
        'name',
        'email',
        'ruc_number',
        'address',
        'phone',

    ];
}
