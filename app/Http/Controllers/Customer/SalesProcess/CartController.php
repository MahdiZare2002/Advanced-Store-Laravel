<?php

namespace App\Http\Controllers\Customer\SalesProcess;

use Illuminate\Http\Request;
use App\Models\Market\Product;
use App\Models\Market\CartItem;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart()
    {
        if (Auth::check()) {
            $cartItems = CartItem::where('user_id', Auth::user()->id)->get();
            $relatedProducts = Product::all();
            return view('customer.sales-process.cart', compact('cartItems', 'relatedProducts'));
        } else {
            return redirect()->route('auth.customer.login-register-form');
        }
    }

    public function updateCart()
    {
        //
    }

    public function addToCart(Product $product, Request $request)
    {
        if (Auth::check()) {
            $request->validate([
                'color' => 'nullable|exists:product_colors, id',
                'guarantee' => 'nullable|exists:guarantees, id',
                'number' => 'numeric|min:1|max:5',
            ]);

            $cartItems = CartItem::where('product_id', $product->id)->where('user_id', Auth::user()->id)->get();


            foreach ($cartItems as $cartItem) {
                if ($cartItem->color == $request->color && $cartItem->guarantee == $request->guarantee) {
                    if ($cartItem->number != $request->number) {
                        $cartItem->update([
                            'number' => $request->number,
                        ]);
                    }
                    return back();
                }
            }

            $inputs = [];
            $inputs['color_id'] = $request->color;
            $inputs['guarantee_id'] = $request->guarantee;
            $inputs['user_id'] = Auth::user()->id;
            $inputs['product_id'] = $request->product;
            CartItem::create($inputs);


            return back()->with('alert-section-success', 'محصول شما با موفقیت به سبد خرید اضافه شد');
        } else {
            return redirect()->route('auth.customer.login-register-form');
        }
    }

    public function removeFromCart(CartItem $cartItem)
    {
        if ($cartItem->user_id === Auth::user()->id) {
            $cartItem->delete();
        }
        return back();
    }
}
