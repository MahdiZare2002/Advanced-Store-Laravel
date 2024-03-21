<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function copan()
    {
        return view('admin.market.discount.copan');
    }
    public function copanCreate()
    {
        return view('admin.market.discount.copan-create');
    }
    public function commonDiscount()
    {
        return view('admin.market.discount.common');
    }
    public function commonDiscountCreate()
    {
        return view('admin.market.discount.common-create');
    }
    public function amazingSale()
    {
        return view('admin.market.discount.amazing');
    }
    public function amazingSaleCreate()
    {
        return view('admin.market.discount.amazing-create');
    }
}
