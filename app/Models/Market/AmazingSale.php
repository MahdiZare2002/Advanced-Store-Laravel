<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AmazingSale extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['product_id', 'percentage', 'start_date', 'end_date', 'status'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
