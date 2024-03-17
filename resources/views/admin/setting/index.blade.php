@extends('admin.layouts.master')

@section('head-tag')
    <title>تنظیمات</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12 active" aria-current="page"> تنظیمات</li>
        </ol>
    </nav>


    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        تنظیمات
                    </h5>
                </section>

                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a class="btn btn-info btn-sm disabled">ایجاد تنظیمات جدید</a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>

                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان سایت</th>
                                <th>توضیحات سایت</th>
                                <th>کلمات کلیدی سایت</th>
                                <th>لوگو سایت</th>
                                <th>آیکون سایت</th>
                                <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>{{ $setting->title }}</td>
                                <td>{{ $setting->description }}</td>
                                <td>{{ $setting->keywords }}</td>
                                <td><img src="{{ asset($setting->logo) }}" alt="" width="100" height="50">
                                </td>
                                <td><img src="{{ asset($setting->icon) }}" alt="" width="100" height="50">
                                </td>
                                <td class="width-22-rem text-left">
                                    <a href="{{ route('admin.setting.edit', $setting->id) }}"
                                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

            </section>
        </section>
    </section>
@endsection
