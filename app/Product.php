<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'cat_id', 'brand_id', 'images', 'price'
    ];

    public function categories() {
        return $this->belongsTo('App\Category');
    }
}
