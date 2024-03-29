<?php

namespace App\Http\Controllers\Customer\Market;

use App\Http\Controllers\Controller;
use App\Models\Market\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Product $product)
    {
        $relatedPosts = Product::all();
        return view('customer.market.product.product', compact('product' , 'relatedPosts'));
    }

    public function addComment()
    {
        //
    }
}
