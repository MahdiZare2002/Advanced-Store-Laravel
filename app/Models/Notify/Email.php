<?php

namespace App\Models\Notify;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Email extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'public_mail';

    protected $fillable = ['body', 'subject', 'status', 'published_at'];
}
