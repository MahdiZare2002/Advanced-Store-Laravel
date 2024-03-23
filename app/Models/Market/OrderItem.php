<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function singleProduct()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function amazingSale()
    {
        return $this->belongsTo(AmazingSale::class);
    }

    public function color()
    {
        return $this->belongsTo(ProductColor::class);
    }

    public function guarantee()
    {
        return $this->belongsTo(Guarantee::class);
    }

    public function orderItemAttributes()
    {
        return $this->hasMany(OrderItemSelectedAttribute::class);
    }
}
