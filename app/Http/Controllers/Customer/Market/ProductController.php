<?php

namespace App\Http\Controllers\Customer\Market;

use App\Http\Controllers\Controller;
use App\Models\Content\Comment;
use App\Models\Market\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function product(Product $product)
    {
        $relatedProducts = Product::all();
        return view('customer.market.product.product', compact('product', 'relatedProducts'));
    }

    public function addComment(Product $product, Request $request)
    {
        $request->validate([
            'body' => 'required|max:2000',
        ]);

        $inputs['body'] = str_replace(PHP_EOL, '</br>', $request->body);
        $inputs['author_id'] = Auth::user()->id;
        $inputs['commentable_id'] = $product->id;
        $inputs['commentable_type'] = Product::class;
        Comment::create($inputs);
        return back();
    }

    public function addToFavorite(Product $product)
    {
        if (Auth::check()) {
            $product->user()->toggle(Auth::user()->id);
            if ($product->user->contains(Auth::user()->id)) {
                response()->json(['status' => 1]);
            } else {
                response()->json(['status' => 2]);
            }
        } else {
            response()->json(['status' => 3]);
        }
    }

    public function addRate(Product $product, Request $request)
    {
        $productIds = auth()->user()->isUserPurchedProduct($product->id);

        if (Auth::check() && $productIds->count() > 0) {
            $user = Auth::user();
            $user->rate($product, $request->rating);
            return back()->with('alert-section-success', 'امتیاز شما با موفقیت ثبت گردید');
        } else {
            return back()->with('alert-section-error', 'شما اجازه ثبت امتیاز ندارید - ابتدا باید محصول را خریداری نمایید');
        }
    }
}
