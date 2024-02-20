<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head-tag')
    @yield('head-tag')
</head>

<body dir="rtl">


    @include('admin.layouts.header')


    <section class="body-container">

        @include('admin.layouts.sidebar')

        <section id="main-body" class="main-body">


            @yield('content')


        </section>
    </section>







    @include('admin.layouts.script')
    @yield('script')


</body>

</html>
