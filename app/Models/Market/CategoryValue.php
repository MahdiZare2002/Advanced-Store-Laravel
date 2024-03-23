<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryValue extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['product_id', 'category_attribute_id', 'value', 'type'];


    public function attribute()
    {
        return $this->belongsTo(CategoryAttribute::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
