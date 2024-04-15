@extends('customer.layouts.master-two-col')

@section('head-tag')
    <title>تیکت های شما</title>
@endsection


@section('content')
    <!-- start body -->
    <section class="">
        <section id="main-body-two-col" class="container-xxl body-container">
            <section class="row">


                @include('customer.layouts.partials.profile-sidebar')

                <main id="main-body" class="main-body col-md-9">
                    <section class="content-wrapper bg-white p-3 rounded-2 mb-2">

                        <!-- start vontent header -->
                        <section class="content-header">
                            <section class="d-flex justify-content-between align-items-center">
                                <h2 class="content-header-title">
                                    <span>تاریخچه تیکت </span>
                                </h2>
                                <section class="content-header-link m-2">
                                    <a href="{{ route('customer.profile.my-tickets') }}"
                                        class="btn btn-danger text-white">بازگشت</a>
                                </section>
                            </section>
                        </section>
                        <!-- end vontent header -->
                        <section class="order-wrapper">

                            <section class="card mb-3">
                                <section class="card-header  bg-info">
                                    {{ $ticket->user->first_name . ' ' . $ticket->user->last_name }}

                                </section>
                                <section class="card-body">
                                    <h5 class="card-title">موضوع : {{ $ticket->subject }}
                                    </h5>
                                    <p class="card-text">
                                        {{ $ticket->description }}
                                    </p>
                                </section>
                                @if ($ticket->file()->count() > 0)
                                    <section class="card-footer">
                                        <a class="btn btn-success" href="{{ asset($ticket->file->file_path) }}"
                                            download>دانلود
                                            ضمیمه</a>
                                    </section>
                                @endif

                            </section>



                            <hr>

                            <div class="border my-2">
                                @foreach ($ticket->children as $child)
                                    <section class="card m-4">
                                        <section class="card-header bg-light d-flex justify-content-between">
                                            <div> {{ $child->user->first_name . ' ' . $child->user->last_name }} - پاسخ
                                                دهنده :
                                                {{ $child->admin ? $child->admin->user->first_name . ' ' . $child->admin->user->last_name : 'نامشخص' }}
                                            </div>
                                            <small>{{ jdate($child->created_at) }}</small>
                                        </section>
                                        <section class="card-body">
                                            <p class="card-text">
                                                {{ $child->description }}
                                            </p>
                                        </section>

                                    </section>
                                @endforeach
                            </div>



                            <section class="my-3">
                                <form action="{{ route('customer.profile.my-tickets.answer', $ticket->id) }}"
                                    method="post">
                                    @csrf
                                    <section class="row">
                                        <section class="col-12">
                                            <div class="form-group">
                                                <label for="" class="my-2">پاسخ تیکت </label>
                                                ‍
                                                <textarea class="form-control form-control-sm" rows="4" name="description">{{ old('description') }}</textarea>
                                            </div>
                                            @error('description')
                                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </span>
                                            @enderror
                                        </section>
                                        <section class="col-12 my-3">
                                            <button class="btn btn-primary btn-sm">ثبت</button>
                                        </section>
                                    </section>
                                </form>
                            </section>

                        </section>


                    </section>
                </main>
            </section>
        </section>
    </section>
    <!-- end body -->
@endsection
