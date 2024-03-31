@extends('customer.layouts.master-simple')

@section('head-tag')

<style>
    #resend-otp{
        font-size: 1rem;
    }
</style>

@endsection

@section('content')


<section class="vh-100 d-flex justify-content-center align-items-center pb-5">
    <form action="{{ route('auth.customer.login-confirm', $token) }}" method="post">
        @csrf
    <section class="login-wrapper mb-5">
        <section class="login-logo">
            <img src="{{ asset('customer-assets/images/logo/4.png') }}" alt="">
        </section>
        <section class="login-title mb-2">
            <a href="{{ route('auth.customer.login-register-form') }}">
                <i class="fa fa-arrow-right"></i>
            </a>
        </section>
          <section class="login-title">
            کد تایید را وارد نمایید
        </section>

        @if($otp->type == 0)
        <section class="login-info">
            کد تایید برای شماره موبایل {{ $otp->login_id }} ارسال گردید
        </section>
        @else
        <section class="login-info">
            کد تایید برای ایمیل {{ $otp->login_id }} ارسال گردید
        </section>
        @endif
        <section class="login-input-text">
            <input type="text" name="otp" value="{{ old('otp') }}">
            @error('otp')
            <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                <strong>
                    {{ $message }}
                </strong>
            </span>
        @enderror
        </section>
        <section class="login-btn d-grid g-2"><button class="btn btn-danger">تایید</button></section>

        <section id="resend-otp" class="d-none">
            <a href="{{ route('auth.customer.login-resend-otp', $token) }}" class="text-decoration-none text-primary">دریافت مجدد کد تایید</a>
        </section>
        <section id="timer"></section>

    </section>
    </form>
</section>


@endsection


@section('script')

@php
    $timer = ((new \Carbon\Carbon($otp->created_at))->addMinutes(5)->timestamp - \Carbon\Carbon::now()->timestamp) * 1000;
@endphp

<script>

   var countDownDate = new Date().getTime() + {{ $timer }};
    var timer = $('#timer');
    var resendOtp = $('#resend-otp');

    var x = setInterval(function(){

        var now = new Date().getTime();

        var distance = countDownDate - now;

        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if(minutes == 0){
            timer.html('ارسال مجدد کد تایید تا ' + seconds + 'ثانیه دیگر')
        }
        else{
            timer.html('ارسال مجدد کد تایید تا ' + minutes + 'دقیقه و ' + seconds + 'ثانیه دیگر');
        }
        if(distance < 0)
        {
            clearInterval(x);
            timer.addClass('d-none');
            resendOtp.removeClass('d-none');
        }

    }, 1000)





</script>

@endsection
