<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    protected $fillable = [
        'name',
        'email',
        'city',
        'adddress'
    ];
}
