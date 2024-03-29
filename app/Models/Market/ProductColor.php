<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductColor extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = ['color_name', 'color', 'product_id', 'price_increase', 'status', 'sold_number', 'frozen_number', 'marketable_number'];

    protected $casts = ['image' => 'array'];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
