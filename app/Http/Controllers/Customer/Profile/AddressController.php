<?php

namespace App\Http\Controllers\Customer\Profile;

use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function index()
    {
        $provinces = Province::all();
        return view('customer.profile.my-addresses', compact('provinces'));
    }
}
