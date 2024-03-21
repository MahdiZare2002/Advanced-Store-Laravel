<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductColor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['color_name', 'product_id', 'price_increase', 'sold_number', 'status', 'frozen_number', 'marketable_number'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
