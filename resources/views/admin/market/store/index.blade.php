@extends('admin.layouts.master')

@section('head-tag')
    <title>انبار</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> انبار</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        انبار
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="" class="btn btn-info btn-sm disabled">ایجاد انبار جدید</a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>نام کالا</th>
                                <th>تصویر کالا</th>
                                <th>تعداد قابل فروش</th>
                                <th>تعداد رزرو شده</th>
                                <th>تعداد فروخته شده</th>
                                <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        <img src="{{ asset($product->image['indexArray'][$product->image['currentImage']]) }}"
                                            alt="" width="100" height="50">
                                    </td>
                                    <td>{{ $product->marketable_number }}</td>
                                    <td>{{ $product->frozen_number }}</td>
                                    <td>{{ $product->sold_number }}</td>
                                    <td class="width-22-rem text-left">
                                        <a href="{{ route('admin.market.store.add-to-store', $product->id) }}"
                                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> افزایش موجودی</a>
                                        <a href="{{ route('admin.market.store.edit', $product->id) }}"
                                            class="btn btn-warning btn-sm"><i class="fa fa-trash-alt"></i> اصلاح موجودی</a>
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
