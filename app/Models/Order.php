<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model{
    //

    protected $fillable = [
        'user_id',
        'grand_total',
        'paymend_method',
        'paymend_status',
        'status',
        'currency',
        'shipping_amount',
        'shipping_method',
        'notes',
        'address_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function items() {
        return $this->hasMany(orderItem::class);
    }

    public function address() {
        return $this->hasOne(Address::class);
    }
    
    //hasOne
}
