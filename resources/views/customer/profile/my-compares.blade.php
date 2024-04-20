@extends('customer.layouts.master-two-col')

@section('head-tag')
    <title>لیست علاقه مقایسه های شما</title>
@endsection


@section('content')
    <!-- start body -->
    <section class="">
        <section id="main-body-two-col" class="container-xxl body-container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <section class="row">


                @include('customer.layouts.partials.profile-sidebar')


                <main id="main-body" class="main-body col-md-9">
                    <section class="content-wrapper bg-white p-3 rounded-2 mb-2">

                        <!-- start vontent header -->
                        <section class="content-header mb-4">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title">
                                    <span>لیست علاقه مقایسه من</span>
                                </h2>
                                <section class="content-header-link">
                                    <!--<a href="#">مشاهده همه</a>-->
                                </section>
                            </section>
                        </section>
                        <!-- end vontent header -->
                        @if (auth()->user()->compare->products()->count() > 0)
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>عکس محصول</td>
                                        @foreach (auth()->user()->compare->products as $product)
                                            <td>
                                                <img src="{{ asset($product->image['indexArray']['medium']) }}"
                                                    alt="" width="100" height="100">
                                            </td>
                                        @endforeach

                                    </tr>
                                    <tr>
                                        <td>قیمت محصول</td>
                                        @foreach (auth()->user()->compare->products as $product)
                                            <td>{{ priceFormat($product->price) }}</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>نام محصول</td>
                                        @foreach (auth()->user()->compare->products as $product)
                                            <td>{{ Str::limit($product->name, 20) }}</td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <h2>محصولی برای مقایسه یافت نشد</h2>
                        @endif


                    </section>
                </main>
            </section>
        </section>
    </section>
    <!-- end body -->
@endsection
