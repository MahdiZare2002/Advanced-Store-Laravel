<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Delivery extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'delivery';


    protected $fillable = ['name', 'amount', 'delivery_time', 'delivery_time_unit', 'status'];
}
