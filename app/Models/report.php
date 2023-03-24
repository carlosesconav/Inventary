<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    protected $fillable = 
    [
        'key_proveedor',
        'key_producto'
    ];
}
