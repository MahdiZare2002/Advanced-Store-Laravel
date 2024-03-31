@extends('customer.layouts.master-two-col')

@section('head-tag')
<title>{{ $product->name }}</title>
@endsection

@section('content')


<!-- start cart -->
<section class="mb-4">
    <section class="container-xxl" >
        <section class="row">
            <section class="col">
                <!-- start vontent header -->
                <section class="content-header">
                    <section class="d-flex justify-content-between align-items-center">
                        <h2 class="content-header-title">
                            <span>{{ $product->name }}</span>
                        </h2>
                        <section class="content-header-link">
                            <!--<a href="#">مشاهده همه</a>-->
                        </section>
                    </section>
                </section>

                <section class="row mt-4">
                    <!-- start image gallery -->
                    <section class="col-md-4">
                        <section class="content-wrapper bg-white p-3 rounded-2 mb-4">
                            <section class="product-gallery">
                                @php
                                    $imageGalley = $product->images()->get();
                                    $images = collect();
                                    $images->push($product->image);
                                    foreach ($imageGalley as $image) {
                                        $images->push($image->image);
                                    }

                                @endphp
                                <section class="product-gallery-selected-image mb-3">
                                    <img src="{{ asset($images->first()['indexArray']['medium']) }}" alt="">
                                </section>
                                <section class="product-gallery-thumbs">
                                    @foreach ($images as $key => $image)

                                    <img class="product-gallery-thumb" src="{{ asset($image['indexArray']['medium']) }}" alt="{{ asset($image['indexArray']['medium']) . '-' . ($key + 1) }}" data-input="{{ asset($image['indexArray']['medium']) }}">

                                    @endforeach

                                </section>
                            </section>
                        </section>
                    </section>
                    <!-- end image gallery -->

                    <!-- start product info -->
                    <section class="col-md-5">

                        <section class="content-wrapper bg-white p-3 rounded-2 mb-4">

                            <!-- start vontent header -->
                            <section class="content-header mb-3">
                                <section class="d-flex justify-content-between align-items-center">
                                    <h2 class="content-header-title content-header-title-small">
                                        {{ $product->name }}
                                    </h2>
                                    <section class="content-header-link">
                                        <!--<a href="#">مشاهده همه</a>-->
                                    </section>
                                </section>
                            </section>
                            <section class="product-info">

                                @php
                                $colors = $product->colors()->get();
                                  @endphp

                                  @if($colors->count() != 0)
                                <p><span>رنگ انتخاب شده : <span id="selected_color_name"> {{ $colors->first()->color_name }}</span></span></p>
                                <p>
                                    @foreach ($colors as $key => $color)

                                    <label for="{{ 'color_' . $color->id }}" style="background-color: {{ $color->color ?? '#ffffff' }};" class="product-info-colors me-1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $color->color_name }}"></label>

                                    <input class="d-none" type="radio" name="color" id="{{ 'color_' . $color->id }}" value="{{ $color->id }}" data-color-name="{{ $color->color_name }}" data-color-price={{ $color->price_increase }} @if($key == 0) checked @endif>
                                    @endforeach

                                </p>
                                @endif

                                @php
                                $guarantees = $product->guarantees()->get();
                                  @endphp
                                  @if($guarantees->count() != 0)

                                <p><i class="fa fa-shield-alt cart-product-selected-warranty me-1"></i>
                                گارانتی :
                                <select name="guarantee" id="guarantee" class="p-1">
                                    @foreach ($guarantees as $key => $guarantee)
                                    <option value="{{ $guarantee->id }}" data-guarantee-price={{ $guarantee->price_increase }}  @if($key == 0) selected @endif>{{ $guarantee->name }}</option>
                                    @endforeach

                                </select>
                                </p>

                                @endif



                                <p>
                                    @if($product->marketable_number > 0)
                                    <i class="fa fa-store-alt cart-product-selected-store me-1"></i> <span>کالا موجود در انبار</span>
                                    @else
                                    <i class="fa fa-store-alt cart-product-selected-store me-1"></i> <span>کالا ناموجود</span>
                                    @endif
                                </p>
                                <p>

                                    @guest
                                    <section class="product-add-to-favorite position-relative" style="top: 0">
                                        <button class="btn btn-light btn-sm text-decoration-none" data-url="{{ route('customer.market.add-to-favorite', $product) }}" data-bs-toggle="tooltip" data-bs-placement="left" title="اضافه از علاقه مندی">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </section>
                                        @endguest
                                        @auth
                                            @if ($product->user->contains(auth()->user()->id))
                                            <section class="product-add-to-favorite position-relative" style="top: 0">
                                                <button class="btn btn-light btn-sm text-decoration-none" data-url="{{ route('customer.market.add-to-favorite', $product) }}" data-bs-toggle="tooltip" data-bs-placement="left" title="حذف از علاقه مندی">
                                                    <i class="fa fa-heart text-danger"></i>
                                                </button>
                                            </section>
                                            @else
                                            <section class="product-add-to-favorite position-relative" style="top: 0">
                                                <button class="btn btn-light btn-sm text-decoration-none" data-url="{{ route('customer.market.add-to-favorite', $product) }}" data-bs-toggle="tooltip" data-bs-placement="left" title="اضافه به علاقه مندی">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                            </section>
                                            @endif
                                        @endauth
                                </p>
                                <section>
                                    <section class="cart-product-number d-inline-block ">
                                        <button class="cart-number cart-number-down" type="button">-</button>
                                        <input type="number" id="number" name="number" min="1" max="5" step="1" value="1" readonly="readonly">
                                        <button class="cart-number cart-number-up" type="button">+</button>
                                    </section>
                                </section>
                                <p class="mb-3 mt-5">
                                    <i class="fa fa-info-circle me-1"></i>کاربر گرامی  خرید شما هنوز نهایی نشده است. برای ثبت سفارش و تکمیل خرید باید ابتدا آدرس خود را انتخاب کنید و سپس نحوه ارسال را انتخاب کنید. نحوه ارسال انتخابی شما محاسبه و به این مبلغ اضافه شده خواهد شد. و در نهایت پرداخت این سفارش صورت میگیرد. پس از ثبت سفارش کالا بر اساس نحوه ارسال که شما انتخاب کرده اید کالا برای شما در مدت زمان مذکور ارسال می گردد.
                                </p>
                            </section>
                        </section>

                    </section>
                    <!-- end product info -->

                    <section class="col-md-3">
                        <section class="content-wrapper bg-white p-3 rounded-2 cart-total-price">
                            <section class="d-flex justify-content-between align-items-center">
                                <p class="text-muted">قیمت کالا</p>
                                <p class="text-muted"><span id="product_price" data-product-original-price={{ $product->price }}>{{ priceFormat($product->price) }}</span> <span class="small">تومان</span></p>
                            </section>


                            @php

                            $amazingSale = $product->activeAmazingSales();

                            @endphp
                            @if(!empty($amazingSale))
                            <section class="d-flex justify-content-between align-items-center">
                                <p class="text-muted">تخفیف کالا</p>
                                <p class="text-danger fw-bolder" id="product-discount-price" data-product-discount-price="{{ ($product->price * ($amazingSale->percentage / 100) ) }}">{{ priceFormat($product->price * ($amazingSale->percentage / 100) ) }} <span class="small">تومان</span></p>
                            </section>
                            @endif

                            <section class="border-bottom mb-3"></section>

                            <section class="d-flex justify-content-end align-items-center">
                                <p class="fw-bolder"><span  id="final-price"></span> <span class="small">تومان</span></p>
                            </section>

                            <section class="">
                                @if($product->marketable_number > 0)
                                <a id="next-level" href="#" class="btn btn-danger d-block">افزودن به سبد خرید</a>
                                @else
                                <a id="next-level" href="#" class="btn btn-secondary disabled d-block">محصول نا موجود میباشد</a>
                                @endif
                            </section>

                        </section>
                    </section>
                </section>
            </section>
        </section>

    </section>
</section>
<!-- end cart -->



<!-- start product lazy load -->
<section class="mb-4">
    <section class="container-xxl" >
        <section class="row">
            <section class="col">
                <section class="content-wrapper bg-white p-3 rounded-2">
                    <!-- start vontent header -->
                    <section class="content-header">
                        <section class="d-flex justify-content-between align-items-center">
                            <h2 class="content-header-title">
                                <span>کالاهای مرتبط</span>
                            </h2>
                            <section class="content-header-link">
                                <!--<a href="#">مشاهده همه</a>-->
                            </section>
                        </section>
                    </section>
                    <!-- start vontent header -->
                    <section class="lazyload-wrapper" >
                        <section class="lazyload light-owl-nav owl-carousel owl-theme">

                            @foreach ($relatedProducts as $relatedProduct)

                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        @guest
                                        <section class="product-add-to-favorite">
                                            <button class="btn btn-light btn-sm text-decoration-none" data-url="{{ route('customer.market.add-to-favorite', $relatedProduct) }}" data-bs-toggle="tooltip" data-bs-placement="left" title="اضافه از علاقه مندی">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </section>
                                        @endguest
                                        @auth
                                            @if ($relatedProduct->user->contains(auth()->user()->id))
                                            <section class="product-add-to-favorite">
                                                <button class="btn btn-light btn-sm text-decoration-none" data-url="{{ route('customer.market.add-to-favorite', $relatedProduct) }}" data-bs-toggle="tooltip" data-bs-placement="left" title="حذف از علاقه مندی">
                                                    <i class="fa fa-heart text-danger"></i>
                                                </button>
                                            </section>
                                            @else
                                            <section class="product-add-to-favorite">
                                                <button class="btn btn-light btn-sm text-decoration-none" data-url="{{ route('customer.market.add-to-favorite', $relatedProduct) }}" data-bs-toggle="tooltip" data-bs-placement="left" title="اضافه به علاقه مندی">
                                                    <i class="fa fa-heart"></i>
                                                </button>
                                            </section>
                                            @endif
                                        @endauth
                                           <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="{{ asset($relatedProduct->image['indexArray']['medium']) }}" alt="">
                                            </section>
                                            <section class="product-name"><h3>{{ $relatedProduct->name }}</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">{{ priceFormat($relatedProduct->price) }} تومان</section>
                                            </section>
                                            <section class="product-colors">
                                                @foreach ($relatedProduct->colors()->get() as $color)
                                                <section class="product-colors-item" style="background-color: {{ $color->color }};"></section>
                                                @endforeach
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            @endforeach


                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
<!-- end product lazy load -->

<!-- start description, features and comments -->
<section class="mb-4">
    <section class="container-xxl" >
        <section class="row">
            <section class="col">
                <section class="content-wrapper bg-white p-3 rounded-2">
                    <!-- start content header -->
                    <section id="introduction-features-comments" class="introduction-features-comments">
                        <section class="content-header">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title">
                                    <span class="me-2"><a class="text-decoration-none text-dark" href="#introduction">معرفی</a></span>
                                    <span class="me-2"><a class="text-decoration-none text-dark" href="#features">ویژگی ها</a></span>
                                    <span class="me-2"><a class="text-decoration-none text-dark" href="#comments">دیدگاه ها</a></span>
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>
                    </section>
                    <!-- start content header -->

                    <section class="py-4">

                        <!-- start vontent header -->
                        <section id="introduction" class="content-header mt-2 mb-4">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title content-header-title-small">
                                    معرفی
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>
                        <section class="product-introduction mb-4">
                            {!! $product->introduction !!}
                        </section>

                        <!-- start vontent header -->
                        <section id="features" class="content-header mt-2 mb-4">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title content-header-title-small">
                                    ویژگی ها
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>
                        <section class="product-features mb-4 table-responsive">
                            <table class="table table-bordered border-white">
                                @foreach ($product->values()->get() as $value)
                                <tr>
                                    <td>{{ $value->attribute()->first()->name }}</td>
                                    <td>{{ json_decode($value->value)->value }} {{ $value->attribute()->first()->unit }}</td>
                                </tr>
                                @endforeach

                                @foreach ($product->metas()->get() as $meta)
                                <tr>
                                    <td>{{ $meta->meta_key }}</td>
                                    <td>{{ $meta->meta_value }}</td>
                                </tr>
                                @endforeach


                            </table>
                        </section>

                        <!-- start vontent header -->
                        <section id="comments" class="content-header mt-2 mb-4">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title content-header-title-small">
                                    دیدگاه ها
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>
                        <section class="product-comments mb-4">

                            <section class="comment-add-wrapper">
                                <button class="comment-add-button" type="button" data-bs-toggle="modal" data-bs-target="#add-comment" ><i class="fa fa-plus"></i> افزودن دیدگاه</button>
                                <!-- start add comment Modal -->
                                <section class="modal fade" id="add-comment" tabindex="-1" aria-labelledby="add-comment-label" aria-hidden="true">
                                    <section class="modal-dialog">
                                        <section class="modal-content">
                                            <section class="modal-header">
                                                <h5 class="modal-title" id="add-comment-label"><i class="fa fa-plus"></i> افزودن دیدگاه</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </section>
                                            @guest
                                                <section class="modal-body">
                                                    <p>کاربر گرامی لطفا برای ثبت نظر ابتدا وارد حساب کاربری خود شوید </p>
                                                    <p>لینک ثبت نام و یا ورود
                                                        <a href="{{ route('auth.customer.login-register-form') }}">کلیک کنید</a>
                                                    </p>
                                                </section>
                                            @endguest
                                            @auth

                                            <section class="modal-body">
                                                <form class="row" action="{{ route('customer.market.add-comment', $product) }}" method="post">
                                                    @csrf
                                                    {{-- <section class="col-6 mb-2">
                                                        <label for="first_name" class="form-label mb-1">نام</label>
                                                        <input type="text" class="form-control form-control-sm" id="first_name" placeholder="نام ...">
                                                    </section>

                                                    <section class="col-6 mb-2">
                                                        <label for="last_name" class="form-label mb-1">نام خانوادگی</label>
                                                        <input type="text" class="form-control form-control-sm" id="last_name" placeholder="نام خانوادگی ...">
                                                    </section> --}}

                                                    <section class="col-12 mb-2">
                                                        <label for="comment" class="form-label mb-1">دیدگاه شما</label>
                                                        <textarea class="form-control form-control-sm" id="comment" placeholder="دیدگاه شما ..." rows="4" name="body"></textarea>
                                                    </section>

                                            </section>
                                            <section class="modal-footer py-1">
                                                <button type="submit" class="btn btn-sm btn-primary">ثبت دیدگاه</button>
                                                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">بستن</button>
                                            </section>
                                        </form>
                                            @endauth
                                        </section>
                                    </section>
                                </section>
                            </section>

                            @foreach ($product->activeComments() as $activeComment)
                            <section class="product-comment">
                                <section class="product-comment-header d-flex justify-content-start">
                                    <section class="product-comment-date">{{ jalaliDate($activeComment->created_at) }}</section>
                                    @php
                                        $author = $activeComment->user()->first();
                                    @endphp
                                    <section class="product-comment-title">
                                        @if(empty($author->first_name) && empty($author->last_name))
                                            ناشناس
                                            @else
                                            {{ $author->first_name . ' ' . $author->last_name }}
                                        @endif
                                    </section>
                                </section>
                                <section class="product-comment-body @if($activeComment->answers()->count() > 0) border-bottom  @endif">
                                 {!! $activeComment->body !!}
                                </section>


                                @foreach ($activeComment->answers()->get() as $commentAnswer)
                                <section class="product-comment">
                                    <section class="product-comment-header d-flex justify-content-start">
                                        <section class="product-comment-date">{{ jalaliDate($commentAnswer->created_at) }}</section>
                                        @php
                                            $author = $commentAnswer->user()->first();
                                        @endphp
                                        <section class="product-comment-title">
                                            @if(empty($author->first_name) && empty($author->last_name))
                                                ناشناس
                                                @else
                                                {{ $author->first_name . ' ' . $author->last_name }}
                                            @endif
                                        </section>
                                    </section>
                                    <section class="product-comment-body @if($commentAnswer->answers()->count() > 0) border-bottom @endif">
                                     {!! $commentAnswer->body !!}
                                    </section>
                                </section>
                                @endforeach


                            </section>
                            @endforeach



                        </section>
                    </section>

                </section>
            </section>
        </section>
    </section>
</section>
<!-- end description, features and comments -->


<section class="position-fixed p-4 flex-row-reverse" style="z-index: 909999999; left: 0; top: 3rem; width: 26rem; max-width: 80%;">
    <div class="toast"  data-delay="7000" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <strong class="me-auto">فروشگاه</strong>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <strong class="ml-auto">
                برای افزودن کالا به لیست علاقه مندی ها باید ابتدا وارد حساب کاربری خود شوید
                <br>
                <a href="{{ route('auth.customer.login-register-form') }}" class="text-dark">
                    ثبت نام / ورود
                </a>
            </strong>
        </div>
      </div>
</section>

@endsection

@section('script')
<script>
    $(document).ready(function(){
      bill();
      //input color
    $('input[name="color"]').change(function(){
        bill();
    })
    //guarantee
    $('select[name="guarantee"]').change(function(){
        bill();
    })
     //number
     $('.cart-number').click(function(){
        bill();
    })
    })

    function bill() {
        if($('input[name="color"]:checked').length != 0){
            var selected_color = $('input[name="color"]:checked');
           $("#selected_color_name").html(selected_color.attr('data-color-name'));
        }

        //price computing
        var selected_color_price = 0;
        var selected_guarantee_price = 0;
        var number = 1;
        var product_discount_price = 0;
        var product_original_price = parseFloat($('#product_price').attr('data-product-original-price'));

        if($('input[name="color"]:checked').length != 0)
        {
            selected_color_price = parseFloat(selected_color.attr('data-color-price'));
        }

        if($('#guarantee option:selected').length != 0)
        {
            selected_guarantee_price = parseFloat($('#guarantee option:selected').attr('data-guarantee-price'));
        }

        if($('#number').val() > 0)
        {
            number = parseFloat($('#number').val());
        }

        if($('#product-discount-price').length != 0)
        {
            product_discount_price = parseFloat($('#product-discount-price').attr('data-product-discount-price'));
        }

        //final price
        var product_price = product_original_price + selected_color_price + selected_guarantee_price;
        var final_price = number * (product_price - product_discount_price);
        $('#product-price').html(toFarsiNumber(product_price));
        $('#final-price').html(toFarsiNumber(final_price));
    }

    function toFarsiNumber(number)
    {
        const farsiDigits = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        // add comma
        number = new Intl.NumberFormat().format(number);
        //convert to persian
        return number.toString().replace(/\d/g, x => farsiDigits[x]);
    }

</script>


<script>
    $('.product-add-to-favorite button').click(function() {
       var url = $(this).attr('data-url');
       var element = $(this);
       $.ajax({
           url : url,
           success : function(result){
            if(result.status == 1)
            {
                $(element).children().first().addClass('text-danger');
                $(element).attr('data-original-title', 'حذف از علاقه مندی ها');
                $(element).attr('data-bs-original-title', 'حذف از علاقه مندی ها');
            }
            else if(result.status == 2)
            {
                $(element).children().first().removeClass('text-danger')
                $(element).attr('data-original-title', 'افزودن از علاقه مندی ها');
                $(element).attr('data-bs-original-title', 'افزودن از علاقه مندی ها');
            }
            else if(result.status == 3)
            {
                $('.toast').toast('show');
            }
           }
       })
    })
</script>
@endsection
