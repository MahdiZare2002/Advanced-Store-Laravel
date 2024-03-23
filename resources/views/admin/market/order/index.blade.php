@extends('admin.layouts.master')

@section('head-tag')
<title>سفارشات</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> سفارشات</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                 سفارشات
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="" class="btn btn-info btn-sm disabled">ایجاد سفارش </a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover h-150px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>کد سفارش</th>
                            <th>مجموع مبلغ سفارش (بدون تخفیف)</th>
                            <th>مجموع تمامی مبلغ تخفیفات </th>
                            <th>مبلغ تخفیف همه محصولات</th>
                            <th>مبلغ نهایی</th>
                            <th>وضعیت پرداخت</th>
                            <th>شیوه پرداخت</th>
                            <th>بانک</th>
                            <th>وضعیت ارسال</th>
                            <th>شیوه ارسال</th>
                            <th>وضعیت سفارش</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)

                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->order_final_amount }} تومان</td>
                            <td>{{ $order->order_discount_amount }} تومان</td>
                            <td>{{ $order->order_total_products_discount_amount }} تومان</td>
                            <td>{{ $order->order_final_amount -  $order->order_discount_amount }} تومان</td>
                            <td>{{ $order->payment_status_value }}</td>
                            <td>{{ $order->payment_type_value }}</td>
                            <td>{{ $order->payment->paymentable->gateway ?? '-' }}</td>
                            <td>{{ $order->delivery_status_value }}</td>
                            <td>{{ $order->delivery->name }}</td>
                            <td>{{ $order->order_status_value }}</td>
                            <td class="width-8-rem text-left">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-success btn-sm btn-block dorpdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-tools"></i> عملیات
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a href="{{ route('admin.market.order.show', $order->id) }}" class="dropdown-item text-right"><i class="fa fa-images"></i> مشاهده فاکتور</a>
                                        <a href="{{ route('admin.market.order.changeSendStatus', $order->id) }}" class="dropdown-item text-right"><i class="fa fa-list-ul"></i> تغییر وضعیت ارسال</a>
                                        <a href="{{ route('admin.market.order.changeOrderStatus', $order->id) }}" class="dropdown-item text-right"><i class="fa fa-edit"></i> تغییر وضعیت سفارش</a>
                                        <a href="{{ route('admin.market.order.cancelOrder', $order->id) }}" class="dropdown-item text-right"><i class="fa fa-window-close"></i> باطل کردن سفارش</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

@endsection
