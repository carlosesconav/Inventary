<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inventary extends Model
{
    protected $fillable = [
        'name',
        'category',
        'price',
        'amount',
        'direccion',
        'foto',
    ];
}