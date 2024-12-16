<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'properties';
    
    protected $fillable = [
        'name',
        'price',
        'address',
        'state',
        'status',
        'category_id',
        'picture',
        'description'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
