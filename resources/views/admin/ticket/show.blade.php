@extends('admin.layouts.master')

@section('head-tag')
<title>نمایش تیکت ها</title>
@endsection

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item font-size-12"> <a href="#"> خانه</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#"> بخش تیکت ها</a></li>
      <li class="breadcrumb-item font-size-12"> <a href="#"> تیکت ها</a></li>
      <li class="breadcrumb-item font-size-12 active" aria-current="page"> نمایش تیکت ها</li>
    </ol>
  </nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                نمایش تیکت ها
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.ticket.index') }}" class="btn btn-info btn-sm">بازگشت</a>
            </section>

            <section class="card mb-3">
                <section class="card-header text-white bg-custom-pink">
                    کامران محمدی - 845362736
                </section>
                <section class="card-body">
                    <h5 class="card-title">موضوع : عدم دسترسی به صفحه سفارشات من
                    </h5>
                    <p class="card-text">من دیروز خرید کردم، ولی به بخش سفارشات پنل نمی توانم برم و وضعیت سفارشم را ببینم
                    </p>
                </section>
            </section>

            <section>
                <form action="" method="">
                    <section class="row">
                        <section class="col-12">
                            <div class="form-group">
                                <label for="">پاسخ تیکت </label>
                               ‍<textarea class="form-control form-control-sm" rows="4"></textarea>
                            </div>
                        </section>
                        <section class="col-12">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>
                    </section>
                </form>
            </section>

        </section>
    </section>
</section>

@endsection
