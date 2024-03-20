<?php

namespace App\Models\User;

use App\Models\User\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory, SoftDeletes;

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
