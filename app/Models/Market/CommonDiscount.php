<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommonDiscount extends Model
{
    protected $table = 'common_discount';

    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'percentage', 'discount_ceiling', 'minimal_order_amount', 'start_date', 'end_date', 'status'];

}
