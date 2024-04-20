<!-- start product lazy load -->
<section class="mb-4">
    <section class="container-xxl">
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
                    <section class="lazyload-wrapper">
                        <section class="lazyload light-owl-nav owl-carousel owl-theme">

                            @forelse($relatedProducts as $relatedProduct)

                                <section class="item">
                                    <section class="lazyload-item-wrapper">
                                        <section class="product">
                                            <section class="product-add-to-cart"><a href="#"
                                                    data-bs-toggle="tooltip" data-bs-placement="left"
                                                    title="افزودن به سبد خرید"><i class="fa fa-cart-plus"></i></a>
                                            </section>
                                            @guest
                                                <section class="product-add-to-favorite">
                                                    <button class="btn btn-light btn-sm text-decoration-none"
                                                        data-url="{{ route('customer.market.add-to-favorite', $relatedProduct) }}"
                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                        title="اضافه از علاقه مندی">
                                                        <i class="fa fa-heart"></i>
                                                    </button>
                                                </section>
                                            @endguest
                                            @auth
                                                @if ($relatedProduct->user->contains(auth()->user()->id))
                                                    <section class="product-add-to-favorite">
                                                        <button class="btn btn-light btn-sm text-decoration-none"
                                                            data-url="{{ route('customer.market.add-to-favorite', $relatedProduct) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="حذف از علاقه مندی">
                                                            <i class="fa fa-heart text-danger"></i>
                                                        </button>
                                                    </section>
                                                @else
                                                    <section class="product-add-to-favorite">
                                                        <button class="btn btn-light btn-sm text-decoration-none"
                                                            data-url="{{ route('customer.market.add-to-favorite', $relatedProduct) }}"
                                                            data-bs-toggle="tooltip" data-bs-placement="left"
                                                            title="اضافه به علاقه مندی">
                                                            <i class="fa fa-heart"></i>
                                                        </button>
                                                    </section>
                                                @endif
                                            @endauth
                                            <a class="product-link" href="#">
                                                <section class="product-image">
                                                    <img class=""
                                                        src="{{ asset($relatedProduct->image['indexArray']['medium']) }}"
                                                        alt="">
                                                </section>
                                                <section class="product-name">
                                                    <h3>{{ $relatedProduct->name }}</h3>
                                                </section>
                                                <section class="product-price-wrapper">
                                                    <section class="product-price">
                                                        {{ priceFormat($relatedProduct->price) }}
                                                        تومان</section>
                                                </section>
                                                <section class="product-colors">
                                                    @foreach ($relatedProduct->colors()->get() as $color)
                                                        <section class="product-colors-item"
                                                            style="background-color: {{ $color->color }};"></section>
                                                    @endforeach
                                                </section>
                                            </a>
                                        </section>
                                    </section>
                                </section>
                            @empty
                                <p>محصولی یافت نشد</p>
                            @endforelse


                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
<!-- end product lazy load -->
