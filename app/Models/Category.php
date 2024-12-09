<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
        'name',
    ];


    public function properties() {
        // return $this->hasOne(Property::class, 'category_id');
        return $this->hasMany(Property::class, 'category_id');
    }
}
