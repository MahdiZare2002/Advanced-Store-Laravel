<?php

namespace App\Http\Controllers\Customer\SalesProcess;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\SalesProcess\ProfileCompletionRequest;
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

    public function update(ProfileCompletionRequest $request)
    {
        $user = Auth::user();
        $inputs = $request->all();
        $user->update($inputs);
        return redirect()->route('customer.sales-process.address-and-delivery');
    }
}
