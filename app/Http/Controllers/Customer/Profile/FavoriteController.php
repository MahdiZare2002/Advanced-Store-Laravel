<?php

namespace App\Http\Controllers\Customer\Profile;

use App\Http\Controllers\Controller;
use App\Models\Market\Product;

class FavoriteController extends Controller
{
    public function index()
    {
        return view('customer.profile.my-favorites');
    }

    public function delete(Product $product)
    {
        $user = auth()->user();
        $user->products()->detach($product->id);
        return redirect()->route('customer.profile.my-favorites')->with('success', 'محصول با موفقیت از علاقه مندی ها حذف شد');
    }
}
