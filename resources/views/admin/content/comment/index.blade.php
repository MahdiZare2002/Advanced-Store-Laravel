@extends('admin.layouts.master')

@section('head-tag')
<title>نظرات</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#"> خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#"> بخش فروش</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> نظرات</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                 نظرات
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="#" class="btn btn-info btn-sm disabled">ایجاد نظر </a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                </div>
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>کد کاربر</th>
                            <th>نویسنده نظر</th>
                            <th>کد کالا</th>
                            <th>کالا</th>
                            <th>وضعیت</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>1231231</td>
                            <td>حسن خسروجردی</td>
                            <td>21321312</td>
                            <td>ایفون 12</td>
                            <td>در انتظار تایید</td>
                            <td class="width-16-rem text-left">
                                <a href="{{ route('admin.content.comment.show') }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> نمایش</a>
                                <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-check"></i> تایید</button>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>1231231</td>
                            <td>حسن خسروجردی</td>
                            <td>21321312</td>
                            <td>ایفون 12</td>
                            <td>تایید شده</td>
                            <td class="width-16-rem text-left">
                                <a href="{{ route('admin.content.comment.show') }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> نمایش</a>
                                <button class="btn btn-warning btn-sm" type="submit"><i class="fa fa-clock"></i> عدم تایید</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

@endsection
