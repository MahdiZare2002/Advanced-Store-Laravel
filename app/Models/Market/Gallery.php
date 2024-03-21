<?php

namespace App\Models\Market;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    protected $table = 'product_images';

    use HasFactory, SoftDeletes;

    protected $fillable = ['image', 'product_id'];

    protected $casts = ['image' => 'array'];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }



}
