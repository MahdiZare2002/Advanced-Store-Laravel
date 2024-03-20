<?php

namespace App\Models\User;

use App\Models\User;
use App\Models\User\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description', 'status'];

    public function users(){
        return $this->belongsToMany(User::class);
    }
    
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
}
