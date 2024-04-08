<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

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
