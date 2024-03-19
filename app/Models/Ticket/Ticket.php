<?php

namespace App\Models\Ticket;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory, SoftDeletes;


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function admin(){
        return $this->belongsTo(TicketAdmin::class, 'reference_id');
    }


    public function priority(){
        return $this->belongsTo(TicketPriority::class);
    }
}
