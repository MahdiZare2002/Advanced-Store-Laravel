<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    ////////////////////  copan  //////////////////////////////
    public function copan()
    {
        return view('admin.market.discount.copan');
    }

    public function copanCreate()
    {
        //create
        return view('admin.market.discount.copan-create');
    }



    //////////////////////  common discount  //////////////////////////////
    public function commonDiscount()
    {
        return view('admin.market.discount.common');
    }
    public function commonDiscountCreate()
    {
        //create
        return view('admin.market.discount.common-create');
    }


    ///////////////////////  amazing sale  //////////////////////////////
    public function amazingSale()
    {
        return view('admin.market.discount.amazing');
    }
    public function amazingSaleCreate()
    {
        //create
        return view('admin.market.discount.amazing=create');
    }
}
