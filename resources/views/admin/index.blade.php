<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>admin-panel</title>
</head>

<body dir="rtl">


    <header class="header">
        <section class="sidebar-header bg-gray">
            <section class="d-flex justify-content-between flex-md-row-reverse px-2">
                <span id="sidebar-toggle-show" class="d-inline d-md-none pointer"><i class="fas fa-toggle-off"></i></span>
                <span id="sidebar-toggle-hide" class="d-none d-md-inline pointer"><i class="fas fa-toggle-on"></i></span>
                <span><img class="logo" src="assets/images/logo.png" alt=""></span>
                <span class="d-md-none" id="menu-toggle"><i class="fas fa-ellipsis-h"></i></span>
            </section>
        </section>
        <section class="body-header" id="body-header">
            <section class="d-flex justify-content-between">
                <section>
                    <span class="mr-5">
                        <span id="search-area" class="search-area d-none">
                            <i id="search-area-hide" class="fas fa-times pointer"></i>
                            <input id="search-input" type="text" class="search-input">
                            <i class="fas fa-search pointer"></i>
                        </span>
                    <i id="search-toggle" class="fas fa-search p-1 d-none d-md-inline pointer"></i>
                    </span>

                    <span id="full-screen" class="pointer p-1 d-none d-md-inline mr-5">
                        <i id="screen-compress" class="fas fa-compress d-none"></i>
                        <i id="screen-expand" class="fas fa-expand "></i>
                    </span>
                </section>
                <section>
                    <span class="ml-2 ml-md-4 position-relative">
                        <span id="header-notification-toggle" class="pointer">
                            <i class="far fa-bell"></i><sup class="badge badge-danger">4</sup>
                        </span>
                    <section id="header-notification" class="header-notifictation rounded">
                        <section class="d-flex justify-content-between">
                            <span class="px-2">
                                نوتیفیکیشن ها
                            </span>
                            <span class="px-2">
                                <span class="badge badge-danger">جدید</span>
                            </span>
                        </section>

                        <ul class="list-group rounded px-0">
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img class="notification-img" src="assets/images/avatar-2.jpg" alt="avatar">
                                    <section class="media-body pr-1">
                                        <h5 class="notification-user">محمد هاشمی</h5>
                                        <p class="notification-text">این یک متن تستی است</p>
                                        <p class="notification-time">30 دقیقه پیش</p>
                                    </section>
                                </section>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img class="notification-img" src="assets/images/avatar-2.jpg" alt="">
                                    <section class="media-body pr-1">
                                        <h5 class="notification-user">محمد هاشمی</h5>
                                        <p class="notification-text">این یک متن تستی است</p>
                                        <p class="notification-time">30 دقیقه پیش</p>
                                    </section>
                                </section>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <section class="media">
                                    <img class="notification-img" src="assets/images/avatar-2.jpg" alt="">
                                    <section class="media-body pr-1">
                                        <h5 class="notification-user">محمد هاشمی</h5>
                                        <p class="notification-text">این یک متن تستی است</p>
                                        <p class="notification-time">30 دقیقه پیش</p>
                                    </section>
                                </section>
                            </li>
                        </ul>
                    </section>
                    </span>
                    <span class="ml-2 ml-md-4 position-relative">
                        <span id="header-comment-toggle" class="pointer">
                            <i class="far fa-comment-alt"><sup class="badge badge-danger">3</sup></i>
                        </span>

                    <section id="header-comment" class="header-comment">

                        <section class="border-bottom px-4">
                            <input type="text" class="form-control form-control-sm my-4" placeholder="جستجو ...">
                        </section>

                        <section class="header-comment-wrapper">
                            <ul class="list-group rounded px-0">
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user"> محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                                <li class="list-group-item list-groupt-item-action">
                                    <section class="media">
                                        <img src="assets/images/avatar-2.jpg" alt="avatar" class="notification-img">
                                        <section class="media-body pr-1">
                                            <section class="d-flex justify-content-between">
                                                <h5 class="comment-user">محمد هاشمی</h5>
                                                <span><i class="fas fa-circle text-success comment-user-status"></i></span>
                                            </section>
                                        </section>
                                    </section>
                                </li>
                            </ul>
                        </section>

                    </section>

                    </span>
                    <span class="ml-3 ml-md-5 position-relative">
                        <span id="header-profile-toggle" class="pointer">
                            <img class="header-avatar" src="assets/images/avatar-2.jpg" alt="">
                            <span class="header-username">کامران محمدی</span>
                    <i class="fas fa-angle-down"></i>
                    </span>
                    <section id="header-profile" class="header-profile rounded">
                        <section class="list-group rounded">
                            <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                <i class="fas fa-cog"></i>تنظیمات
                            </a>
                            <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                <i class="fas fa-user"></i>کاربر
                            </a>
                            <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                <i class="far fa-envelope"></i>پیام ها
                            </a>
                            <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                <i class="fas fa-lock"></i>قفل صفحه
                            </a>
                            <a href="#" class="list-group-item list-group-item-action header-profile-link">
                                <i class="fas fa-sign-out-alt"></i>خروج
                            </a>
                        </section>
                    </section>
                    </span>
                </section>
            </section>
        </section>
    </header>

    <section class="body-container">
        <aside id="sidebar" class="sidebar">
            <section class="sidebar-container">
                <section class="sidebar-wrapper">

                    <a href="#" class="sidebar-link">
                        <i class="fas fa-home"></i>
                        <span>خانه</span>
                    </a>

                    <section class="sidebar-part-title">بخش محتوی</section>

                    <a href="#" class="sidebar-link">
                        <i class="fas fa-bars"></i>
                        <span>دسته ها</span>
                    </a>

                    <section class="sidebar-group-link">
                        <section class="sidebar-dropdown-toggle">
                            <i class="fas fa-chart-bar icon"></i>
                            <span>نوشته ها</span>
                            <i class="fas fa-angle-left angle"></i>
                        </section>
                        <section class="sidebar-dropdown">
                            <a href="#">مقالات</a>
                            <a href="#">پست ها</a>
                            <a href="#">دوره ها</a>
                        </section>
                    </section>

                    <section class="sidebar-part-title">بخش کاربران</section>

                    <section class="sidebar-group-link">
                        <section class="sidebar-dropdown-toggle">
                            <i class="fas fa-users icon"></i>
                            <span>کاربران</span>
                            <i class="fas fa-angle-left angle"></i>
                        </section>
                        <section class="sidebar-dropdown">
                            <a href="#">ادمین</a>
                            <a href="#">مدرس ها</a>
                            <a href="#">دانشجو </a>
                        </section>
                    </section>

                    <section class="sidebar-part-title">بخش کاربران</section>

                    <section class="sidebar-group-link">
                        <section class="sidebar-dropdown-toggle">
                            <i class="fas fa-cogs icon"></i>
                            <span>تنظیمات منو</span>
                            <i class="fas fa-angle-left angle"></i>
                        </section>
                        <section class="sidebar-dropdown">
                            <a href="#">منوی هدر</a>
                            <a href="#">منوی فوتر</a>
                        </section>
                    </section>


                </section>
            </section>
        </aside>



        <section id="main-body" class="main-body">

            <section class="row">

                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-custom-yellow text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5>30,200 تومان</h5>
                                        <p>سود خالص</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>
                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                            </section>
                        </section>
                    </a>
                </section>
                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-custom-green text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5>30,200 تومان</h5>
                                        <p>سود خالص</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>
                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                            </section>
                        </section>
                    </a>
                </section>
                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-custom-pink text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5>30,200 تومان</h5>
                                        <p>سود خالص</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>
                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                            </section>
                        </section>
                    </a>
                </section>
                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-custom-blue text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5>30,200 تومان</h5>
                                        <p>سود خالص</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>
                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                            </section>
                        </section>
                    </a>
                </section>
                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-danger text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5>30,200 تومان</h5>
                                        <p>سود خالص</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>
                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                            </section>
                        </section>
                    </a>
                </section>
                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-success text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5>30,200 تومان</h5>
                                        <p>سود خالص</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>
                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                            </section>
                        </section>
                    </a>
                </section>
                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-warning text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5>30,200 تومان</h5>
                                        <p>سود خالص</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>
                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                            </section>
                        </section>
                    </a>
                </section>
                <section class="col-lg-3 col-md-6 col-12">
                    <a href="#" class="text-decoration-none d-block mb-4">
                        <section class="card bg-primary text-white">
                            <section class="card-body">
                                <section class="d-flex justify-content-between">
                                    <section class="info-box-body">
                                        <h5>30,200 تومان</h5>
                                        <p>سود خالص</p>
                                    </section>
                                    <section class="info-box-icon">
                                        <i class="fas fa-chart-line"></i>
                                    </section>
                                </section>
                            </section>
                            <section class="card-footer info-box-footer">
                                <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر
                            </section>
                        </section>
                    </a>
                </section>

            </section>

            <section class="row">
                <section class="col-12">
                    <section class="main-body-container">
                        <section class="main-body-container-header">
                            <h5>
                                بخش کاربران
                            </h5>
                            <p>
                                در این بخش اطلاعاتی در مورد کاربران به شما داده می شود
                            </p>
                        </section>
                        <section class="body-content">
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت
                                می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت
                                می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                                کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت
                                می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                        </section>
                    </section>
                </section>
            </section>



        </section>
    </section>








    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/grid.js"></script>
</body>

</html>