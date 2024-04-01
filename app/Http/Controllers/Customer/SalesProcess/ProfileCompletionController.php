<?php

namespace App\Http\Controllers\Customer\SalesProcess;

use App\Http\Controllers\Controller;
use App\Models\Market\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileCompletionController extends Controller
{
    public function profileCompletion()
    {
        $user = Auth::user();
        $cartItems = CartItem::where('user_id', $user->id)->get();
        return view('customer.sales-process.profile-completion', compact('user', 'cartItems'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'sometimes|required',
            'last_name' => 'sometimes|required',
            'email' => 'email|unique:users,email',
            'mobile' => 'sometimes|required|min:10|max:13||unique:users,mobile',
            'national_code' => 'sometimes|required',
        ]);
        $user = Auth::user();
        $inputs = $request->all();
        $user->update($inputs);
        return redirect()->route('customer.sales-process.address-and-delivery');
    }
}
