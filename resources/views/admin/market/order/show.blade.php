@extends('admin.layouts.master')

@section('head-tag')
<title>فاکتور سفارش</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> فاکتور</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                 فاکتور
                </h5>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover h-150px" id="printable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="table-primary">
                            <th>{{ $order->id }}</th>
                            <td class="width-8-rem text-left">
                                <a href="" class="btn btn-dark btn-sm text-white" id="print">
                                    <i class="fa fa-print"></i>
                                    چاپ
                                </a>
                                 <a href="{{ route('admin.market.order.show.detail', $order->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-book"></i>
                                    جزئیات
                                </a>
                            </td>
                        </tr>

                           <tr class="border-bottom">
                            <th>نام مشتری</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->user->fullName ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>آدرس</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->address->address ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>شهر</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->address->city->name ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>کد پستی</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->address->postal_code ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>پلاک</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->address->no ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>واحد</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->address->unit ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>نام گیرنده</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->address->recipient_first_name ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>نام خانوادگی گیرنده</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->address->recipient_last_name ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>موبایل</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->address->mobile ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>نوع پرداخت</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->payment_type_value }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>وضعیت پرداخت</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->payment_status_value }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>مبلغ ارسال</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->delivery_amount ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>وضعیت ارسال</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->delivery_status_value }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>تاریخ ارسال</th>
                            <td class="text-left font-weight-bolder">
                                {{ jalaliDate($order->delivery_time) }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>مجموع مبلغ سفارش (بدون تخفیف)</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->order_final_amount ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>مجموع تمامی مبلغ تخفیفات</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->order_discount_amount ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>مبلغ تخفیف همه محصولات</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->order_total_products_discount_amount ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>مبلغ نهایی</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->order_final_amount -  $order->order_discount_amount }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>بانک</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->payment->paymentable->gateway ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>کوپن استفاده شده</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->copan->code ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>تخفیف کد تخفیف</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->order_copan_discount_amount ?? '-' }}
                            </td>
                        </tr>
                           <tr class="border-bottom">
                            <th>تخفیف عمومی استفاده شده</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->commonDiscount->title ?? '-' }}
                            </td>
                        </tr>

                          <tr class="border-bottom">
                            <th>مبلغ تخفیف عمومی</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->order_common_discount_amount ?? '-' }}
                            </td>
                        </tr>
                          <tr class="border-bottom">
                            <th>وضعیت سفارش</th>
                            <td class="text-left font-weight-bolder">
                                {{ $order->order_status_value }}
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

@endsection


@section('script')

<script>

var printBtn = document.getElementById('print');
printBtn.addEventListener('click', function(){
    printContent('printable');
})


function printContent(el){

    var restorePage = $('body').html();
    var printContent = $('#' + el).clone();
    $('body').empty().html(printContent);
    window.print();
    $('body').html(restorePage);
}


</script>

@endsection
