@extends('customer.layouts.master-one-col')


@section('content')

<!-- start slideshow -->
<section class="container-xxl my-4">
    <section class="row">
        <section class="col-md-8 pe-1">
            <section id="slideshow" class="owl-carousel owl-theme">
                <section class="item"><a class="w-100 d-block h-auto text-decoration-none" href="#"><img class="w-100 rounded-2 d-block h-auto" src="assets/images/slideshow/1.jpg" alt=""></a></section>
                <section class="item"><a class="w-100 d-block h-auto text-decoration-none" href="#"><img class="w-100 rounded-2 d-block h-auto" src="assets/images/slideshow/2.jpg" alt=""></a></section>
                <section class="item"><a class="w-100 d-block h-auto text-decoration-none" href="#"><img class="w-100 rounded-2 d-block h-auto" src="assets/images/slideshow/3.jpg" alt=""></a></section>
                <section class="item"><a class="w-100 d-block h-auto text-decoration-none" href="#"><img class="w-100 rounded-2 d-block h-auto" src="assets/images/slideshow/4.jpg" alt=""></a></section>
                <section class="item"><a class="w-100 d-block h-auto text-decoration-none" href="#"><img class="w-100 rounded-2 d-block h-auto" src="assets/images/slideshow/5.jpg" alt=""></a></section>
                <section class="item"><a class="w-100 d-block h-auto text-decoration-none" href="#"><img class="w-100 rounded-2 d-block h-auto" src="assets/images/slideshow/6.gif" alt=""></a></section>
            </section>
        </section>
        <section class="col-md-4 ps-1">
            <section class="mb-2"><a href="#" class="d-block"><img class="w-100 rounded-2" src="assets/images/slideshow/12.gif" alt=""></a></section>
            <section class="mb-2"><a href="#" class="d-block"><img class="w-100 rounded-2" src="assets/images/slideshow/11.jpg" alt=""></a></section>
        </section>
    </section>
</section>
<!-- end slideshow -->


<!-- start product lazy load -->
<section class="mb-3">
    <section class="container-xxl" >
        <section class="row">
            <section class="col">
                <section class="content-wrapper bg-white p-3 rounded-2">
                    <!-- start vontent header -->
                    <section class="content-header">
                        <section class="d-flex justify-content-between align-items-center">
                            <h2 class="content-header-title">
                                <span>پربازدیدترین کالاها</span>
                            </h2>
                            <section class="content-header-link">
                                <a href="#">مشاهده همه</a>
                            </section>
                        </section>
                    </section>
                    <!-- start vontent header -->
                    <section class="lazyload-wrapper" >
                        <section class="lazyload light-owl-nav owl-carousel owl-theme">

                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/21.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>گوشی موبایل شیائومی مدل POCO X3 Pro M2102J20SG دو ...</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-discount">
                                                    <span class="product-old-price">6,895,000 </span>
                                                    <span class="product-discount-amount">10%</span>
                                                </section>
                                                <section class="product-price">6,264،000 تومان</section>
                                            </section>
                                            <section class="product-colors">
                                                <section class="product-colors-item" style="background-color: white;"></section>
                                                <section class="product-colors-item" style="background-color: blue;"></section>
                                                <section class="product-colors-item" style="background-color: red;"></section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/22.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>گوشی موبایل سامسونگ مدل Galaxy A32 SM-A325F/DS دو ...</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">6,249,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/17.jpg" alt="">
                                            </section>
                                            <section class="product-name"><h3>کیف هندزفری جانتا مدل 141مجموعه 3 عددی</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-discount">
                                                    <span class="product-old-price">165,000 </span>
                                                    <span class="product-discount-amount">46%</span>
                                                </section>
                                                <section class="product-price">89،000 تومان</section>
                                            </section>
                                            <section class="product-colors">
                                                <section class="product-colors-item" style="background-color: yellow;"></section>
                                                <section class="product-colors-item" style="background-color: green;"></section>
                                                <section class="product-colors-item" style="background-color: white;"></section>
                                                <section class="product-colors-item" style="background-color: blue;"></section>
                                                <section class="product-colors-item" style="background-color: red;"></section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/19.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>گوشی موبایل شیائومی مدل POCO M3 M2010J19CG دو سیم‌...</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">4,199،000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/20.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>گوشی موبایل سامسونگ مدل Galaxy A21S SM-A217F/DS دو...</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">4,149,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/18.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>کیف رودوشی چرم جانتا مدل D078</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-discount">
                                                    <span class="product-old-price">745,000 </span>
                                                    <span class="product-discount-amount">42%</span>
                                                </section>
                                                <section class="product-price">432،000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/16.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>گوشی موبایل سامسونگ مدل Galaxy A12 SM-A125F/DS دو ...</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">3,799,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/14.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>گوشی موبایل شیائومی مدل POCO M3 PRO 5G M2103K19PG ...</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">5,499,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/10.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>مجموعه کتاب من پیش از تو، پس از تو، باز هم من</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">221,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/11.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>کتاب سلخ اثر غزاله شکوهی</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">870,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/13.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>کتاب تختخوابت را مرتب کن اثر ژنرال ویلیام مک ریون</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">89,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>

                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
<!-- end product lazy load -->



<!-- start ads section -->
<section class="mb-3">
    <section class="container-xxl">
        <!-- two column-->
        <section class="row py-4">
            <section class="col"><img class="d-block rounded-2 w-100" src="assets/images/ads/two-col-1.jpg" alt=""></section>
            <section class="col"><img class="d-block rounded-2 w-100" src="assets/images/ads/two-col-2.jpg" alt=""></section>
        </section>

    </section>
</section>
<!-- end ads section -->


<!-- start product lazy load -->
<section class="mb-3">
    <section class="container-xxl" >
        <section class="row">
            <section class="col">
                <section class="content-wrapper bg-white p-3 rounded-2">
                    <!-- start vontent header -->
                    <section class="content-header">
                        <section class="d-flex justify-content-between align-items-center">
                            <h2 class="content-header-title">
                                <span>پیشنهاد آمازون به شما</span>
                            </h2>
                            <section class="content-header-link">
                                <a href="#">مشاهده همه</a>
                            </section>
                        </section>
                    </section>
                    <!-- start vontent header -->
                    <section class="lazyload-wrapper" >
                        <section class="lazyload light-owl-nav owl-carousel owl-theme">

                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/2.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>دستگاه آبمیوه گیری دنویر با کد 1016</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-discount">
                                                    <span class="product-old-price">342,000 </span>
                                                    <span class="product-discount-amount">22%</span>
                                                </section>
                                                <section class="product-price">264،000 تومان</section>
                                            </section>
                                            <section class="product-colors">
                                                <section class="product-colors-item" style="background-color: white;"></section>
                                                <section class="product-colors-item" style="background-color: blue;"></section>
                                                <section class="product-colors-item" style="background-color: red;"></section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/1.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>کتاب اٍر مرکب اثر دارن هاردی با کد 87</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">56,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/3.jpg" alt="">
                                            </section>
                                            <section class="product-name"><h3>پکیج آموزش خطاطی و خوشنویسی با کد 624</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">115,000 تومان</section>
                                            </section>
                                            <section class="product-colors">
                                                <section class="product-colors-item" style="background-color: yellow;"></section>
                                                <section class="product-colors-item" style="background-color: green;"></section>
                                                <section class="product-colors-item" style="background-color: white;"></section>
                                                <section class="product-colors-item" style="background-color: blue;"></section>
                                                <section class="product-colors-item" style="background-color: red;"></section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/4.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>مجموعه داستان های هزار و یک شب</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-discount">
                                                    <span class="product-old-price">230,000 </span>
                                                    <span class="product-discount-amount">10%</span>
                                                </section>
                                                <section class="product-price">207،000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/5.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>کتاب اطلاعات عمومی انتشارات فارابی با کد 3087</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">870,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/6.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>کتاب شیوه گرگ اثر جردن بلفورت</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-discount">
                                                    <span class="product-old-price">59,000 </span>
                                                    <span class="product-discount-amount">50%</span>
                                                </section>
                                                <section class="product-price">29،000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/7.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>مجموعه داستان های قصه های مشهور جهان</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">450,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/8.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>کتاب برای سفر خودآموز مکالمات انگلیسی</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">64,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/9.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>کتاب آدم های سمی اثر لیلیان گلاس</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-discount">
                                                    <span class="product-old-price">164,000 </span>
                                                    <span class="product-discount-amount">10%</span>
                                                </section>
                                                <section class="product-price">147،600 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/10.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>مجموعه کتاب من پیش از تو، پس از تو، باز هم من</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">221,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/11.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>کتاب سلخ اثر غزاله شکوهی</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">870,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/12.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>کتاب بیشعوری اثر جردن بلفورت</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">57,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>
                            <section class="item">
                                <section class="lazyload-item-wrapper">
                                    <section class="product">
                                        <section class="product-add-to-cart"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a></section>
                                        <section class="product-add-to-favorite"><a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="افزودن به علاقه مندی"><i class="fa fa-heart"></i></a></section>
                                        <a class="product-link" href="#">
                                            <section class="product-image">
                                                <img class="" src="assets/images/products/13.jpg" alt="">
                                            </section>
                                            <section class="product-colors"></section>
                                            <section class="product-name"><h3>کتاب تختخوابت را مرتب کن اثر ژنرال ویلیام مک ریون</h3></section>
                                            <section class="product-price-wrapper">
                                                <section class="product-price">89,000 تومان</section>
                                            </section>
                                        </a>
                                    </section>
                                </section>
                            </section>

                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
<!-- end product lazy load -->



<!-- start ads section -->
<section class="mb-3">
    <section class="container-xxl">
        <!-- one column -->
        <section class="row py-4">
            <section class="col"><img class="d-block rounded-2 w-100" src="assets/images/ads/one-col-1.jpg" alt=""></section>
        </section>

    </section>
</section>
<!-- end ads section -->


<!-- start brand part-->
<section class="brand-part mb-4 py-4">
    <section class="container-xxl">
        <section class="row">
            <section class="col">
                <!-- start vontent header -->
                <section class="content-header">
                    <section class="d-flex align-items-center">
                        <h2 class="content-header-title">
                            <span>برندهای ویژه</span>
                        </h2>
                    </section>
                </section>
                <!-- start vontent header -->
                <section class="brands-wrapper py-4" >
                    <section class="brands dark-owl-nav owl-carousel owl-theme">
                        <section class="item">
                            <section class="brand-item">
                                <a href="#"><img class="rounded-2" src="assets/images/brand/huawei.jpg" alt=""></a>
                            </section>
                        </section>
                        <section class="item">
                            <section class="brand-item">
                                <a href="#"><img class="rounded-2" src="assets/images/brand/adata.png" alt=""></a>
                            </section>
                        </section>
                        <section class="item">
                            <section class="brand-item">
                                <a href="#"><img class="rounded-2" src="assets/images/brand/casio.jpg" alt=""></a>
                            </section>
                        </section>
                        <section class="item">
                            <section class="brand-item">
                                <a href="#"><img class="rounded-2" src="assets/images/brand/gplus.jpg" alt=""></a>
                            </section>
                        </section>
                        <section class="item">
                            <section class="brand-item">
                                <a href="#"><img class="rounded-2" src="assets/images/brand/logitech.jpg" alt=""></a>
                            </section>
                        </section>
                        <section class="item">
                            <section class="brand-item">
                                <a href="#"><img class="rounded-2" src="assets/images/brand/nokia.jpg" alt=""></a>
                            </section>
                        </section>
                        <section class="item">
                            <section class="brand-item">
                                <a href="#"><img class="rounded-2" src="assets/images/brand/pakshoma.png" alt=""></a>
                            </section>
                        </section>
                        <section class="item">
                            <section class="brand-item">
                                <a href="#"><img class="rounded-2" src="assets/images/brand/panasonic.png" alt=""></a>
                            </section>
                        </section>
                        <section class="item">
                            <section class="brand-item">
                                <a href="#"><img class="rounded-2" src="assets/images/brand/parskhazar.png" alt=""></a>
                            </section>
                        </section>
                        <section class="item">
                            <section class="brand-item">
                                <a href="#"><img class="rounded-2" src="assets/images/brand/samsung.png" alt=""></a>
                            </section>
                        </section>
                        <section class="item">
                            <section class="brand-item">
                                <a href="#"><img class="rounded-2" src="assets/images/brand/snowa.png" alt=""></a>
                            </section>
                        </section>
                        <section class="item">
                            <section class="brand-item">
                                <a href="#"><img class="rounded-2" src="assets/images/brand/xvision.png" alt=""></a>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
<!-- end brand part-->

@endsection
