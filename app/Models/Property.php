<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $table = 'properties';
    
    protected $fillable = [
        'name',
        'price',
        'address',
        'location',
        'status',
        'category_id',
        'picture',
        'description'
    ];
}
