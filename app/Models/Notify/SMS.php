<?php

namespace App\Models\Notify;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class SMS extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'public_sms';

    protected $fillable = ['title', 'body', 'status', 'published_at'];
}
