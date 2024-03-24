<?php

namespace App\Http\Controllers\Admin;

use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    public function readAll()
    {
        $notifications = Notification::all();
        foreach ($notifications as $notification) {
            $notification->update(['read_at' => now()]);
        }
    }
}
