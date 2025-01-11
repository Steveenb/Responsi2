<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model{
 

    protected $fillable = [
        'name', 
        'slug', 
        'images', 
        'price', 
        'category_id', 
        'brand_id', 
        'in_stock', 
        'is_active', 
        'is_featured', 
        'on_sale',
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }
}
