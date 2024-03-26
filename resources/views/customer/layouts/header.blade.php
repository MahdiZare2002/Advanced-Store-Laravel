
    <!-- start header -->
    <header class="header mb-4">


        <!-- start top-header logo, searchbox and cart -->
        <section class="top-header">
            <section class="container-xxl ">
                <section class="d-md-flex justify-content-md-between align-items-md-center py-3">

                    <section class="d-flex justify-content-between align-items-center d-md-block">
                        <a class="text-decoration-none" href="index.html"><img src="assets/images/logo/8.png" alt="logo"></a>
                        <button class="btn btn-link text-dark d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            <i class="fa fa-bars me-1"></i>
                        </button>
                    </section>

                    <section class="mt-3 mt-md-auto search-wrapper">
                        <section class="search-box">
                            <section class="search-textbox">
                                <span><i class="fa fa-search"></i></span>
                                <input id="search" type="text" class="" placeholder="جستجو ..." autocomplete="off">
                            </section>
                            <section class="search-result visually-hidden">
                                <section class="search-result-title">نتایج جستجو برای  <span class="search-words">"موبایل شیا"</span><span class="search-result-type">در دسته بندی ها</span></section>
                                <section class="search-result-item"><a class="text-decoration-none" href="#"><i class="fa fa-link"></i> دسته موبایل و وسایل جانبی</a></section>

                                <section class="search-result-title">نتایج جستجو برای  <span class="search-words">"موبایل شیا"</span><span class="search-result-type">در برندها</span></section>
                                <section class="search-result-item"><a class="text-decoration-none" href="#"><i class="fa fa-link"></i> برند شیائومی</a></section>
                                <section class="search-result-item"><a class="text-decoration-none" href="#"><i class="fa fa-link"></i> برند توشیبا</a></section>
                                <section class="search-result-item"><a class="text-decoration-none" href="#"><i class="fa fa-link"></i> برند شیانگ پینگ</a></section>

                                <section class="search-result-title">نتایج جستجو برای  <span class="search-words">"موبایل شیا"</span><span class="search-result-type">در کالاها</span></section>
                                <section class="search-result-item"><span class="search-no-result">موردی یافت نشد</span></section>
                            </section>
                        </section>
                    </section>

                    <section class="mt-3 mt-md-auto text-end">
                        @auth
                        <section class="d-inline px-md-3">
                            <button class="btn btn-link text-decoration-none text-dark dropdown-toggle profile-button" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user"></i>
                            </button>
                            <section class="dropdown-menu dropdown-menu-end custom-drop-down" aria-labelledby="dropdownMenuButton1">
                                <section><a class="dropdown-item" href="my-profile.html"><i class="fa fa-user-circle"></i>پروفایل کاربری</a></section>
                                <section><a class="dropdown-item" href="my-orders.html"><i class="fa fa-newspaper"></i>سفارشات</a></section>
                                <section><a class="dropdown-item" href="my-favorites.html"><i class="fa fa-heart"></i>لیست علاقه مندی</a></section>
                                <section><hr class="dropdown-divider"></section>
                                <section><a class="dropdown-item" href="#"><i class="fa fa-sign-out-alt"></i>خروج</a></section>

                            </section>
                            @endauth


                            @guest
                                <a href="{{ route('auth.customer.login-register-form') }}" class="btn btn-link text-decoration-none text-dark profile-button">
                                    <i class="fa fa-user-lock"></i>
                                </a>
                            @endguest
                        </section>


                        <section class="header-cart d-inline ps-3 border-start position-relative">
                            <a class="btn btn-link position-relative text-dark header-cart-link" href="javascript:void(0)">
                                <i class="fa fa-shopping-cart"></i> <span style="top: 80%;" class="position-absolute start-0 translate-middle badge rounded-pill bg-danger">2</span>
                            </a>
                            <section class="header-cart-dropdown">
                                <section class="border-bottom d-flex justify-content-between p-2">
                                    <span class="text-muted">2 کالا</span>
                                    <a class="text-decoration-none text-info" href="cart.html">مشاهده سبد خرید </a>
                                </section>
                                <section class="header-cart-dropdown-body">

                                    <section class="header-cart-dropdown-body-item d-flex justify-content-start align-items-center">
                                        <img class="flex-shrink-1" src="assets/images/products/1.jpg" alt="">
                                        <section class="w-100 text-truncate"><a class="text-decoration-none text-dark" href="#">کتاب اثر مرکب اثر دارن هاردی انتشارات معیار علم</a></section>
                                        <section class="flex-shrink-1"><a class="text-muted text-decoration-none p-1" href="#"><i class="fa fa-trash-alt"></i></a></section>
                                    </section>

                                    <section class="header-cart-dropdown-body-item d-flex justify-content-start align-items-center">
                                        <img class="flex-shrink-1" src="assets/images/products/2.jpg" alt="">
                                        <section class="w-100 text-truncate"><a class="text-decoration-none text-dark" href="#">دستگاه آبمیوه گیری دنویر با کد 1016</a></section>
                                        <section class="flex-shrink-1"><a class="text-muted text-decoration-none p-1" href="#"><i class="fa fa-trash-alt"></i></a></section>
                                    </section>

                                </section>
                                <section class="header-cart-dropdown-footer border-top d-flex justify-content-between align-items-center p-2">
                                    <section class=""><section>مبلغ قابل پرداخت</section><section> 1,326,000 تومان</section></section>
                                    <section class=""><a class="btn btn-danger btn-sm d-block" href="cart.html">ثبت سفارش</a></section>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        <!-- end top-header logo, searchbox and cart -->


        <!-- start menu -->
        <nav class="top-nav">
            <section class="container-xxl ">
                <nav class="">
                    <section class="d-none d-md-flex justify-content-md-start position-relative">

                        <section class="super-navbar-item me-4">
                            <section class="super-navbar-item-toggle">
                                <i class="fa fa-bars me-1"></i>
                                دسته بندی کالاها
                            </section>
                            <section class="sublist-wrapper position-absolute w-100">
                                <section class="position-relative sublist-area">
                                    <section class="sublist-item">
                                        <section class="sublist-item-toggle">کالای دیجیتال</section>
                                        <section class="sublist-item-sublist">
                                            <section class="sublist-item-sublist-wrapper d-flex justify-content-around align-items-center">
                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">لوازم جانبی موبایل</a>
                                                    <a href="#" class="sub-sub-category">اسپیکر موبایل</a>
                                                    <a href="#" class="sub-sub-category">پاور بانک</a>
                                                    <a href="#" class="sub-sub-category">قاب موبایل</a>
                                                    <a href="#" class="sub-sub-category">هولدر نگهدارنده</a>
                                                    <a href="#" class="sub-sub-category">شارژر بیسیم</a>
                                                    <a href="#" class="sub-sub-category">انواع شارژر</a>
                                                    <a href="#" class="sub-category">گوشی موبایل</a>
                                                    <a href="#" class="sub-sub-category">سامسونگ</a>
                                                    <a href="#" class="sub-sub-category">هوآوی</a>
                                                    <a href="#" class="sub-sub-category">اپل</a>
                                                    <a href="#" class="sub-sub-category">آنر</a>
                                                    <a href="#" class="sub-sub-category">نوکیا</a>
                                                    <a href="#" class="sub-category">واقعیت مجازی</a>
                                                    <a href="#" class="sub-category">مچ بند هوشمند</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">هدفون، هدست، هندزفری</a>
                                                    <a href="#" class="sub-category">اسپیکر، بلوتوث و باسیم</a>
                                                    <a href="#" class="sub-category">هارد، فلش و SSD</a>
                                                    <a href="#" class="sub-category">دوربین</a>
                                                    <a href="#" class="sub-sub-category">دوربین عکاسی دیجیتال</a>
                                                    <a href="#" class="sub-sub-category">دوربین ورزشی و فیلم برداری</a>
                                                    <a href="#" class="sub-sub-category">دوربین چاپ سریع</a>
                                                    <a href="#" class="sub-category">لوازم جانبی دوربین</a>
                                                    <a href="#" class="sub-sub-category">لنز</a>
                                                    <a href="#" class="sub-sub-category">کیف</a>
                                                    <a href="#" class="sub-sub-category">کارت حافظه</a>
                                                    <a href="#" class="sub-sub-category">کاغذ چاپ عکس</a>
                                                    <a href="#" class="sub-category">دوربین دو چشم وشکاری</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">تلسکوپ</a>
                                                    <a href="#" class="sub-category">پلی استیشن، ایکس باکس و بازی</a>
                                                    <a href="#" class="sub-category">کامپیوتر و تجهیزات جانبی</a>
                                                    <a href="#" class="sub-sub-category">تجهیزات مخصوی بازی</a>
                                                    <a href="#" class="sub-sub-category">مانیتور</a>
                                                    <a href="#" class="sub-sub-category">کیس های اسمبل شده</a>
                                                    <a href="#" class="sub-sub-category">قطعات داخلی کامپیوتر</a>
                                                    <a href="#" class="sub-sub-category">ماوس</a>
                                                    <a href="#" class="sub-sub-category">کیبورد</a>
                                                    <a href="#" class="sub-category">لپ تاپ</a>
                                                    <a href="#" class="sub-category">لوازم جانبی لپ تاپ</a>
                                                    <a href="#" class="sub-sub-category">کیف، کوله و کاور</a>
                                                    <a href="#" class="sub-sub-category">کابل صدا، AUX و HDMI</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">تبلت</a>
                                                    <a href="#" class="sub-category">شارژر تبلت و موبایل</a>
                                                    <a href="#" class="sub-category">کیف، کاور و لوازم جانبی تبلت</a>
                                                    <a href="#" class="sub-category">باتری</a>
                                                    <a href="#" class="sub-category">دوربین های تحت شبکه</a>
                                                    <a href="#" class="sub-category">مودم و تجهیزات شبکه</a>
                                                    <a href="#" class="sub-category">ماشین های اداری</a>
                                                    <a href="#" class="sub-sub-category">تلفن، بیسیم و سانترال</a>
                                                    <a href="#" class="sub-sub-category">فکس</a>
                                                    <a href="#" class="sub-sub-category">پرینتر</a>
                                                    <a href="#" class="sub-sub-category">لوازم جانبی اداری</a>
                                                    <a href="#" class="sub-category">کتابخوان فیدیبوک</a>
                                                    <a href="#" class="sub-category">کارت هدیه</a>
                                                </section>
                                            </section>
                                        </section>
                                    </section>

                                    <section class="sublist-item">
                                        <section class="sublist-item-toggle">خودرو ابزار و تجهیزات صنعتی</section>
                                        <section class="sublist-item-sublist">
                                            <section class="sublist-item-sublist-wrapper d-flex justify-content-around align-items-center">
                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">خودروهای ایرانی و خارجی</a>
                                                    <a href="#" class="sub-category">موتور سیکلت</a>
                                                    <a href="#" class="sub-category">لوازم جانبی خودرو و موتور سیکلت</a>
                                                    <a href="#" class="sub-sub-category">لوازم تزئینی</a>
                                                    <a href="#" class="sub-sub-category">سیستم صوتی و تصویری</a>
                                                    <a href="#" class="sub-sub-category">نظافت و نگهداری خودرو</a>
                                                    <a href="#" class="sub-sub-category">کلاه کاسکت و لوازم جانبی موتور</a>
                                                    <a href="#" class="sub-category">لوازم یدکی خودرو و موتور سیکلت</a>
                                                    <a href="#" class="sub-category">لوازم یدکی خودرو و موتور سیکلت</a>
                                                    <a href="#" class="sub-sub-category">دیسک و صفحه کلاچ</a>
                                                    <a href="#" class="sub-sub-category">قاب موبایل</a>
                                                    <a href="#" class="sub-sub-category">جلوبندی و تعلیق</a>
                                                    <a href="#" class="sub-sub-category">چراغ خودرو</a>
                                                    <a href="#" class="sub-sub-category">تسمه خودرو</a>
                                                    <a href="#" class="sub-sub-category">کمک فنر</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">لوازم مصرفی خودرو و موتور سیکلت</a>
                                                    <a href="#" class="sub-sub-category">لاستیک و تایر</a>
                                                    <a href="#" class="sub-sub-category">لنت ترمز</a>
                                                    <a href="#" class="sub-sub-category">روغن موتور و ضد یخ</a>
                                                    <a href="#" class="sub-sub-category">مکمل سوخت و روغن و انواع فیلتر</a>
                                                    <a href="#" class="sub-category">ابزار برقی</a>
                                                    <a href="#" class="sub-sub-category">دریل، پیچ گوشتی برقی و شارژی</a>
                                                    <a href="#" class="sub-sub-category">فرز و سنگ رومیزی</a>
                                                    <a href="#" class="sub-sub-category">موتور برق</a>
                                                    <a href="#" class="sub-sub-category">مکنده و دمنده</a>
                                                    <a href="#" class="sub-sub-category">کارواش</a>
                                                    <a href="#" class="sub-sub-category">کمپروسور و جک خودرو</a>
                                                    <a href="#" class="sub-sub-category">ابزار همه کاره برقی و شارژی</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">ابزار غیربرقی</a>
                                                    <a href="#" class="sub-sub-category">ابزار دستی</a>
                                                    <a href="#" class="sub-sub-category">مجموعه ابزار</a>
                                                    <a href="#" class="sub-sub-category">نردبان</a>
                                                    <a href="#" class="sub-sub-category">پیچ گوشتی و فازمتر</a>
                                                    <a href="#" class="sub-sub-category">نظم دهنده ابزار</a>
                                                    <a href="#" class="sub-sub-category">قاب موبایل</a>
                                                    <a href="#" class="sub-sub-category">متر، تراز، اندازه گیری قیق</a>
                                                    <a href="#" class="sub-sub-category">لوازم روانکاری</a>
                                                    <a href="#" class="sub-sub-category">چسب صنعتی</a>
                                                    <a href="#" class="sub-category">لوازم و یزاق آلات صنعتی</a>
                                                    <a href="#" class="sub-sub-category">شیرآلات</a>
                                                    <a href="#" class="sub-sub-category">رنگ</a>
                                                    <a href="#" class="sub-sub-category">دستگیره در</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">لوازم باغبانی</a>
                                                    <a href="#" class="sub-sub-category">قیچی، چاقو و ابزار باغبانی</a>
                                                    <a href="#" class="sub-sub-category">بإر و تخم گیاهان</a>
                                                    <a href="#" class="sub-sub-category">تبر، بیل و کلنگ</a>
                                                    <a href="#" class="sub-sub-category">خاک، کود و آفت کش</a>
                                                    <a href="#" class="sub-category">نور و روشنایی</a>
                                                    <a href="#" class="sub-sub-category">لوستر و آباژور</a>
                                                    <a href="#" class="sub-sub-category">لامپ</a>
                                                    <a href="#" class="sub-sub-category">چندراهی برق و محافظ ولتاژ</a>
                                                    <a href="#" class="sub-category">تجهیزات و ایمنی و کار</a>
                                                    <a href="#" class="sub-sub-category">کفش ایمنی</a>
                                                    <a href="#" class="sub-category">حفاظتی و امنیتی</a>
                                                    <a href="#" class="sub-sub-category">گاوصندوق</a>
                                                </section>
                                            </section>
                                        </section>
                                    </section>

                                    <section class="sublist-item">
                                        <section class="sublist-item-toggle">مد و پوشاک</section>
                                        <section class="sublist-item-sublist">
                                            <section class="sublist-item-sublist-wrapper d-flex justify-content-around align-items-center">
                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">مردانه</a>
                                                    <a href="#" class="sub-category">لباس مردانه</a>
                                                    <a href="#" class="sub-sub-category">تی شرت و پولو شرت</a>
                                                    <a href="#" class="sub-sub-category">پیراهن</a>
                                                    <a href="#" class="sub-sub-category">شلوار</a>
                                                    <a href="#" class="sub-sub-category">لباس زیر</a>
                                                    <a href="#" class="sub-category">کفش مردانه</a>
                                                    <a href="#" class="sub-sub-category">کفش روزمره</a>
                                                    <a href="#" class="sub-sub-category">کفش رسمی</a>
                                                    <a href="#" class="sub-category">اکسسوری مردانه</a>
                                                    <a href="#" class="sub-sub-category">انواع شارژر</a>
                                                    <a href="#" class="sub-sub-category">ساعت</a>
                                                    <a href="#" class="sub-sub-category">کیف</a>
                                                    <a href="#" class="sub-sub-category">کمربند</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">زنانه</a>
                                                    <a href="#" class="sub-category">لباس زنانه</a>
                                                    <a href="#" class="sub-sub-category">پوشش اسلامی و مانتو</a>
                                                    <a href="#" class="sub-sub-category">بلوز و شومیز</a>
                                                    <a href="#" class="sub-sub-category">تیشرت و پولو شرت</a>
                                                    <a href="#" class="sub-sub-category">شلوار و سرهمی</a>
                                                    <a href="#" class="sub-sub-category">لباس زیر</a>
                                                    <a href="#" class="sub-category">کفش زنانه</a>
                                                    <a href="#" class="sub-sub-category">کفش روزمره</a>
                                                    <a href="#" class="sub-sub-category">کفش تخت</a>
                                                    <a href="#" class="sub-category">اکسسوری زنانه</a>
                                                    <a href="#" class="sub-sub-category">انواع شارژر</a>
                                                    <a href="#" class="sub-sub-category">ساعت</a>
                                                    <a href="#" class="sub-sub-category">کیف</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-sub-category">شال و روسری</a>
                                                    <a href="#" class="sub-category">زیور آلات زنانه</a>
                                                    <a href="#" class="sub-sub-category">دستبند</a>
                                                    <a href="#" class="sub-sub-category">گوشواره</a>
                                                    <a href="#" class="sub-sub-category">گردنبند</a>
                                                    <a href="#" class="sub-category">زیور آلات طلا زنانه</a>
                                                    <a href="#" class="sub-sub-category">دستبند</a>
                                                    <a href="#" class="sub-sub-category">گوشواره</a>
                                                    <a href="#" class="sub-sub-category">آویز</a>
                                                    <a href="#" class="sub-sub-category">گردنبند</a>
                                                    <a href="#" class="sub-category">زیورآلات نقره زنانه</a>
                                                    <a href="#" class="sub-category">عینک آفتابی زنانه</a>
                                                    <a href="#" class="sub-category">عینک آفتابی مردانه</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">پوشاک ورزشی مردانه</a>
                                                    <a href="#" class="sub-category">پوشاک ورزشی زنانه</a>
                                                    <a href="#" class="sub-category">کفش ورزشی مردانه</a>
                                                    <a href="#" class="sub-category">کفش ورزشی زنانه</a>
                                                    <a href="#" class="sub-category">پوشاک ورزشی پسرانه</a>
                                                    <a href="#" class="sub-category">پوشاک ورزشی دخترانه</a>
                                                    <a href="#" class="sub-category">کفش ورزشی پسرانه</a>
                                                    <a href="#" class="sub-category">کفش ورزشی دخترانه</a>
                                                    <a href="#" class="sub-category">کوله پشتی مردانه</a>
                                                    <a href="#" class="sub-category">بچه گانه</a>
                                                    <a href="#" class="sub-sub-category">نوزاد</a>
                                                    <a href="#" class="sub-sub-category">پسرانه</a>
                                                    <a href="#" class="sub-sub-category">دخترانه</a>
                                                </section>
                                            </section>
                                        </section>
                                    </section>

                                    <section class="sublist-item">
                                        <section class="sublist-item-toggle">اسباب بازی، کودک و نوزاد</section>
                                        <section class="sublist-item-sublist">
                                            <section class="sublist-item-sublist-wrapper d-flex justify-content-around align-items-center">
                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">بهداشت و حمام کودک و نوزاد</a>
                                                    <a href="#" class="sub-sub-category">پوشک</a>
                                                    <a href="#" class="sub-sub-category">دستمال مرطوب</a>
                                                    <a href="#" class="sub-sub-category">حوله</a>
                                                    <a href="#" class="sub-sub-category">وان حمام نوزاد</a>
                                                    <a href="#" class="sub-sub-category">مینی واش</a>
                                                    <a href="#" class="sub-sub-category">شامپو کودک و نوزاد</a>
                                                    <a href="#" class="sub-category">پوشاک و کفش کودک و نوزاد</a>
                                                    <a href="#" class="sub-sub-category">لباس کودک و لباس نوزادی</a>
                                                    <a href="#" class="sub-sub-category">کفش</a>
                                                    <a href="#" class="sub-sub-category">کفش ورزشی</a>
                                                    <a href="#" class="sub-sub-category">جوراب و پاپوش کودک و نوزاد</a>
                                                    <a href="#" class="sub-sub-category">کلاه و پیشبند نوزاد</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">تبلت</a>
                                                    <a href="#" class="sub-category">ps4 و xbox و بازی </a>
                                                    <a href="#" class="sub-category">اسباب بازی</a>
                                                    <a href="#" class="sub-sub-category">فکری و آموزشی</a>
                                                    <a href="#" class="sub-sub-category">پازل، لگو و ساختنی</a>
                                                    <a href="#" class="sub-sub-category">عروسک وفیگور</a>
                                                    <a href="#" class="sub-sub-category">اسپینر، ابزار شوخی و سرگرمی</a>
                                                    <a href="#" class="sub-sub-category">تفنگ، تیر و لوازم بازی جنگی</a>
                                                    <a href="#" class="sub-category">بازی و سرگرمی کودک</a>
                                                    <a href="#" class="sub-sub-category">ماشین بازی، موتور، سه چرخه</a>
                                                    <a href="#" class="sub-sub-category">دوچرخه</a>
                                                    <a href="#" class="sub-sub-category">دشک بازی و پارک بازی</a>
                                                    <a href="#" class="sub-sub-category">تاب و سرسره</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">سلامت، ایمنی و مراقبت</a>
                                                    <a href="#" class="sub-sub-category">تصفیه هوا</a>
                                                    <a href="#" class="sub-sub-category">ترازو</a>
                                                    <a href="#" class="sub-sub-category">دوربین و پیجر اتاق کودک</a>
                                                    <a href="#" class="sub-sub-category">تب سنج و دماسنج</a>
                                                    <a href="#" class="sub-sub-category">محافظ و ابزار ایمنی</a>
                                                    <a href="#" class="sub-category">خواب کودک</a>
                                                    <a href="#" class="sub-sub-category">مبلمان اتاق کودک</a>
                                                    <a href="#" class="sub-sub-category">چراغ خواب کودک</a>
                                                    <a href="#" class="sub-sub-category">تشک کودک</a>
                                                    <a href="#" class="sub-sub-category">سرویس خواب</a>
                                                    <a href="#" class="sub-sub-category">پتو</a>
                                                    <a href="#" class="sub-sub-category">بالش شیردهی</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">ملزومات گردش و سفر</a>
                                                    <a href="#" class="sub-sub-category">کالسکه و کریر</a>
                                                    <a href="#" class="sub-sub-category">صندلی خودرو کودک و نوزاد</a>
                                                    <a href="#" class="sub-sub-category">ساک لوازم نوزاد</a>
                                                    <a href="#" class="sub-sub-category">لوازم جانبی گردش و سفر</a>
                                                    <a href="#" class="sub-sub-category">هندزفری بیسیم</a>
                                                    <a href="#" class="sub-sub-category">آغوشی</a>
                                                    <a href="#" class="sub-category">لوازم شخصی</a>
                                                    <a href="#" class="sub-sub-category">پستانک و ملزومات</a>
                                                    <a href="#" class="sub-sub-category">شیردوش</a>
                                                    <a href="#" class="sub-sub-category">شورت آموزشی</a>
                                                    <a href="#" class="sub-category">غذاخوری</a>
                                                    <a href="#" class="sub-sub-category">صندلی غذاخوری</a>
                                                    <a href="#" class="sub-sub-category">شیشه شیر، سرلاک، داروخوری</a>
                                                </section>
                                            </section>
                                        </section>
                                    </section>

                                    <section class="sublist-item">
                                        <section class="sublist-item-toggle">کالاهای سوپرمارکتی</section>
                                        <section class="sublist-item-sublist">
                                            <section class="sublist-item-sublist-wrapper d-flex justify-content-around align-items-center">
                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">کالای اساسی و خوار و بار</a>
                                                    <a href="#" class="sub-sub-category">نان</a>
                                                    <a href="#" class="sub-sub-category">برنج</a>
                                                    <a href="#" class="sub-sub-category">روغن</a>
                                                    <a href="#" class="sub-sub-category">قند</a>
                                                    <a href="#" class="sub-sub-category">شکر</a>
                                                    <a href="#" class="sub-sub-category">سس</a>
                                                    <a href="#" class="sub-sub-category">رب و کنسرو گوجه</a>
                                                    <a href="#" class="sub-sub-category">خیارشور و ترشیجات</a>
                                                    <a href="#" class="sub-sub-category">آبلیمو، آبغوره و سرکه</a>
                                                    <a href="#" class="sub-sub-category">ماکارونی، پاستا و رشته</a>
                                                    <a href="#" class="sub-sub-category">زعفران، زرشک و تزئینات غذا</a>
                                                    <a href="#" class="sub-sub-category">حبوبات و سویا</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">بحانه</a>
                                                    <a href="#" class="sub-sub-category">مربا</a>
                                                    <a href="#" class="sub-sub-category">عسل</a>
                                                    <a href="#" class="sub-sub-category">حلواشکری، ارده و کنجد</a>
                                                    <a href="#" class="sub-sub-category">مواد پروتئینی</a>
                                                    <a href="#" class="sub-category">هندزفری بیسیم</a>
                                                    <a href="#" class="sub-sub-category">سوسیس و کالباس</a>
                                                    <a href="#" class="sub-sub-category">گوشت گوسفندی</a>
                                                    <a href="#" class="sub-sub-category">گوشت مرغ</a>
                                                    <a href="#" class="sub-sub-category">تخم مرغ</a>
                                                    <a href="#" class="sub-sub-category">گوشت گاو و گوساله</a>
                                                    <a href="#" class="sub-sub-category">میگو</a>
                                                    <a href="#" class="sub-sub-category">ماهی</a>
                                                    <a href="#" class="sub-sub-category">تن ماهی</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">لبنیات</a>
                                                    <a href="#" class="sub-sub-category">شیر</a>
                                                    <a href="#" class="sub-sub-category">ماست</a>
                                                    <a href="#" class="sub-sub-category">پنبر</a>
                                                    <a href="#" class="sub-sub-category">خامه</a>
                                                    <a href="#" class="sub-category">نوشیدنی ها</a>
                                                    <a href="#" class="sub-sub-category">چای</a>
                                                    <a href="#" class="sub-sub-category">دمنوش</a>
                                                    <a href="#" class="sub-sub-category">قهوه</a>
                                                    <a href="#" class="sub-sub-category">آب و آب معدنی</a>
                                                    <a href="#" class="sub-sub-category">ماءالشعیر</a>
                                                    <a href="#" class="sub-sub-category">نوشابه</a>
                                                    <a href="#" class="sub-sub-category">شربت و آبمیوه</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">میوه و سبزی</a>
                                                    <a href="#" class="sub-category">غذای آماده و نودل</a>
                                                    <a href="#" class="sub-category">فرآورده های منجمد</a>
                                                    <a href="#" class="sub-category">کنسرو و کمپوت</a>
                                                    <a href="#" class="sub-category">تنقلات</a>
                                                    <a href="#" class="sub-sub-category">شکلات، تافی و آبنبات</a>
                                                    <a href="#" class="sub-sub-category">بیسکویت و ویفر</a>
                                                    <a href="#" class="sub-sub-category">مغز طعم دار خشکبار</a>
                                                    <a href="#" class="sub-sub-category">کیک و کلوچه</a>
                                                    <a href="#" class="sub-sub-category">چیپس و پاپ کورن</a>
                                                    <a href="#" class="sub-sub-category">پفک و اسنک</a>
                                                    <a href="#" class="sub-sub-category">آدامس و خوشبو کننده</a>
                                                    <a href="#" class="sub-sub-category">خشکبار و شیرینی</a>
                                                </section>
                                            </section>
                                        </section>
                                    </section>

                                    <section class="sublist-item">
                                        <section class="sublist-item-toggle">زیبایی و سلامت</section>
                                        <section class="sublist-item-sublist">
                                            <section class="sublist-item-sublist-wrapper d-flex justify-content-around align-items-center">
                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">لوازم آرایشی</a>
                                                    <a href="#" class="sub-sub-category">آرایش چشم و ابرو</a>
                                                    <a href="#" class="sub-sub-category">آرایش لب</a>
                                                    <a href="#" class="sub-sub-category">آرایش صورت</a>
                                                    <a href="#" class="sub-sub-category">مواد آرایش مو</a>
                                                    <a href="#" class="sub-sub-category">سنگ پا، بهداشت و زیبایی ناخن</a>
                                                    <a href="#" class="sub-sub-category">تجهیزات جانبی آرایشی</a>
                                                    <a href="#" class="sub-category">لوازم بهداشتی</a>
                                                    <a href="#" class="sub-sub-category">کرم و مراقبت پوست</a>
                                                    <a href="#" class="sub-sub-category">شامپو و مراقبت مو</a>
                                                    <a href="#" class="sub-sub-category">بهداشت دهان و دندان</a>
                                                    <a href="#" class="sub-sub-category">بهداشت و مراقبت بدن</a>
                                                    <a href="#" class="sub-sub-category">ضد تعریق</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">لوازم شخصی برقی</a>
                                                    <a href="#" class="sub-sub-category">ماشین اصلاح صورت</a>
                                                    <a href="#" class="sub-sub-category">ماشین اصلاح سر</a>
                                                    <a href="#" class="sub-sub-category">سشوار</a>
                                                    <a href="#" class="sub-sub-category">اصلاح بدن آقایان</a>
                                                    <a href="#" class="sub-sub-category">اصلاح بدن بانوان</a>
                                                    <a href="#" class="sub-sub-category">اصلاح موی گوش، بینی و ابرو</a>
                                                    <a href="#" class="sub-sub-category">برس پاک سازی</a>
                                                    <a href="#" class="sub-sub-category">اتو مو و حالت دهنده</a>
                                                    <a href="#" class="sub-sub-category">بیگودی و فرکننده</a>
                                                    <a href="#" class="sub-sub-category">مسواک برقی</a>
                                                    <a href="#" class="sub-sub-category">لیزر</a>
                                                    <a href="#" class="sub-category">ست هدیه</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">عطر، ادکلن،اسپری و ست</a>
                                                    <a href="#" class="sub-sub-category">مردانه</a>
                                                    <a href="#" class="sub-sub-category">زنانه</a>
                                                    <a href="#" class="sub-sub-category">جیبی</a>
                                                    <a href="#" class="sub-sub-category">اسپری</a>
                                                    <a href="#" class="sub-category">طلا، نقره و زیورآلات</a>
                                                    <a href="#" class="sub-sub-category">زیورآلات نقره زنانه</a>
                                                    <a href="#" class="sub-sub-category">زیورآلات طلا زنانه</a>
                                                    <a href="#" class="sub-sub-category">حلقه و انگشتر طلای زنانه</a>
                                                    <a href="#" class="sub-sub-category">دستبند طلای زنانه</a>
                                                    <a href="#" class="sub-sub-category">گردنبند طلای زنانه</a>
                                                    <a href="#" class="sub-sub-category">گوشواره طلای زنانه</a>
                                                    <a href="#" class="sub-category">زیور آلات نقره مردانه</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">ابزار سلامت و طبی</a>
                                                    <a href="#" class="sub-sub-category">مچ بند و ساعت هوشمند</a>
                                                    <a href="#" class="sub-sub-category">ترازو</a>
                                                    <a href="#" class="sub-sub-category">کالای خواب و استراحت طبی</a>
                                                    <a href="#" class="sub-sub-category">تست قند خون</a>
                                                    <a href="#" class="sub-sub-category">تب سنج</a>
                                                    <a href="#" class="sub-sub-category">فشار سنج</a>
                                                    <a href="#" class="sub-sub-category">ابزار مراقبت پا</a>
                                                    <a href="#" class="sub-sub-category">نمایشگر ضربان قلب</a>
                                                    <a href="#" class="sub-sub-category">ماساژور</a>
                                                    <a href="#" class="sub-sub-category">تشک و پتوی برقی</a>
                                                    <a href="#" class="sub-sub-category">ویلچر</a>
                                                </section>
                                            </section>
                                        </section>
                                    </section>

                                    <section class="sublist-item">
                                        <section class="sublist-item-toggle">خانه و آشپزخانه</section>
                                        <section class="sublist-item-sublist">
                                            <section class="sublist-item-sublist-wrapper d-flex justify-content-around align-items-center">
                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">صوتی و تصویری</a>
                                                    <a href="#" class="sub-sub-category">تلویزیون</a>
                                                    <a href="#" class="sub-sub-category">سینمای خانگی و ساندبار</a>
                                                    <a href="#" class="sub-sub-category">گیرنده دیجیتال تلویزیون</a>
                                                    <a href="#" class="sub-category">دکوراتیو</a>
                                                    <a href="#" class="sub-sub-category">مبلمان خانگی</a>
                                                    <a href="#" class="sub-sub-category">قاب موبایلدکوراسیون اداری</a>
                                                    <a href="#" class="sub-sub-category">آینه</a>
                                                    <a href="#" class="sub-sub-category">پرده</a>
                                                    <a href="#" class="sub-sub-category">تابلو</a>
                                                    <a href="#" class="sub-sub-category">ساعت دیواری و رومیزی</a>
                                                    <a href="#" class="sub-sub-category">شمع، گل و گلدان</a>
                                                    <a href="#" class="sub-category">فرش ماشینی، دستباف و تابلوفرش</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">لوازم برقی خانگی</a>
                                                    <a href="#" class="sub-sub-category">یخچال و فریزر</a>
                                                    <a href="#" class="sub-sub-category">ماشین لباسشویی</a>
                                                    <a href="#" class="sub-sub-category">ماشین ظرفشویی</a>
                                                    <a href="#" class="sub-sub-category">جاروبرقی</a>
                                                    <a href="#" class="sub-sub-category">جارو شارژی</a>
                                                    <a href="#" class="sub-sub-category">تلفن، بیسیم و سانترال</a>
                                                    <a href="#" class="sub-sub-category">کولر، پنکه و تصفیه هوا</a>
                                                    <a href="#" class="sub-sub-category">قهوه و چایساز، آبمیوه گیر</a>
                                                    <a href="#" class="sub-sub-category">ترازوی آشپزخانه</a>
                                                    <a href="#" class="sub-sub-category">اتوبخار پرسی</a>
                                                    <a href="#" class="sub-category">حیوانات خانگی، غذا و لوازم</a>
                                                    <a href="#" class="sub-sub-category">آکواریوم، غذا و لوازم آبزیان</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">سرویس پذیرایی</a>
                                                    <a href="#" class="sub-sub-category">سرویس غذاخوری</a>
                                                    <a href="#" class="sub-sub-category">قاشق چنگال و کارد</a>
                                                    <a href="#" class="sub-sub-category">پارچ، بطری، لیوان و ماگ</a>
                                                    <a href="#" class="sub-sub-category">ظروف پذیرایی</a>
                                                    <a href="#" class="sub-category">نور و روشنایی</a>
                                                    <a href="#" class="sub-sub-category">لامپ، چراغ و ریسه</a>
                                                    <a href="#" class="sub-sub-category">لوستر و چراغ تزئینی</a>
                                                    <a href="#" class="sub-category">آشپزخانه</a>
                                                    <a href="#" class="sub-sub-category">سرویس ظروف پخت و پز</a>
                                                    <a href="#" class="sub-sub-category">فلاسک و کلمن</a>
                                                    <a href="#" class="sub-sub-category">کتری و قوری و لوازم سرو چای</a>
                                                    <a href="#" class="sub-sub-category">ظروف یک بار مصرف</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">مواد شوینده</a>
                                                    <a href="#" class="sub-sub-category">شوینده ظروف</a>
                                                    <a href="#" class="sub-sub-category">شوینده لباس</a>
                                                    <a href="#" class="sub-sub-category">اسپیکر موبایلتمیزکننده سطوح</a>
                                                    <a href="#" class="sub-category">دستمال کاغذی</a>
                                                    <a href="#" class="sub-category">ملحفه، سرویس، لوازم خواب</a>
                                                    <a href="#" class="sub-category">حوله و وسایل حمام</a>
                                                    <a href="#" class="sub-category">پادری، کمد، لوازم اتاق خواب</a>
                                                    <a href="#" class="sub-category">لوازم دستشویی و روشویی</a>
                                                    <a href="#" class="sub-category">فندک و لوازم جانبی</a>
                                                    <a href="#" class="sub-category">گل، خاک و کود و لوازم باغبانی</a>
                                                </section>
                                            </section>
                                        </section>
                                    </section>

                                    <section class="sublist-item">
                                        <section class="sublist-item-toggle">کتاب، لوازم تحریر و هنر</section>
                                        <section class="sublist-item-sublist">
                                            <section class="sublist-item-sublist-wrapper row">
                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">کتاب و مجله</a>
                                                    <a href="#" class="sub-sub-category">کتاب چاپی</a>
                                                    <a href="#" class="sub-sub-category">مجلات خارجی و داخلی</a>
                                                    <a href="#" class="sub-category">کتاب صوتی</a>
                                                    <a href="#" class="sub-category">محتوی آموزشی</a>
                                                    <a href="#" class="sub-sub-category">آموزش موسیقی</a>
                                                    <a href="#" class="sub-sub-category">آموزش ورزش و سرگرمی</a>
                                                    <a href="#" class="sub-sub-category">آموزش زبان</a>
                                                    <a href="#" class="sub-sub-category">آموزش نرم افزار و کامپیوتر</a>
                                                    <a href="#" class="sub-category">نرم افزار</a>
                                                    <a href="#" class="sub-category">بازی کنسول و کامپیوتر</a>
                                                    <a href="#" class="sub-category">فیلم سینمایی، سریال و مستند</a>
                                                    <a href="#" class="sub-category">آلبوم موسیقی</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">لوازم التحریر</a>
                                                    <a href="#" class="sub-sub-category">لوازم اداری واقلام مصرفی</a>
                                                    <a href="#" class="sub-sub-category">کیف، کوله پشتی و جامدادی</a>
                                                    <a href="#" class="sub-sub-category">چراغ مطالعه</a>
                                                    <a href="#" class="sub-sub-category">کاغذ کادو، پاکت و کارت هدیه</a>
                                                    <a href="#" class="sub-sub-category">نوشت افزار</a>
                                                    <a href="#" class="sub-sub-category">دفتر و کاغذ</a>
                                                    <a href="#" class="sub-sub-category">خودکار و روان نویس</a>
                                                    <a href="#" class="sub-sub-category">ابزار نقاشی و رنگ آمیزی</a>
                                                    <a href="#" class="sub-sub-category">میز تحریر</a>
                                                    <a href="#" class="sub-sub-category">آلبوم عکس</a>
                                                    <a href="#" class="sub-sub-category">کاغذ چاپ و پرینتر</a>
                                                    <a href="#" class="sub-sub-category">مداد و مداد رنگی</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">آلات موسیقی</a>
                                                    <a href="#" class="sub-sub-category">لوازم جانبی ادوات موسیقی</a>
                                                    <a href="#" class="sub-sub-category">گیتار</a>
                                                    <a href="#" class="sub-sub-category">کیبورد و ارگ</a>
                                                    <a href="#" class="sub-sub-category">پیانو دیجیتال</a>
                                                    <a href="#" class="sub-sub-category">درام، پرکاشن و دف</a>
                                                    <a href="#" class="sub-sub-category">تجهیزات استودیویی</a>
                                                    <a href="#" class="sub-sub-category">ویولن</a>
                                                    <a href="#" class="sub-sub-category">سازهای ایرانی</a>
                                                    <a href="#" class="sub-category">فرش ماشینی، دستباف، تابلو فرش</a>
                                                    <a href="#" class="sub-sub-category">فرش ماشینی</a>
                                                    <a href="#" class="sub-sub-category">فرش دستباف</a>
                                                    <a href="#" class="sub-sub-category">تابلو فرش</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">صنایع دستی</a>
                                                    <a href="#" class="sub-sub-category">کالاهای مسی</a>
                                                    <a href="#" class="sub-sub-category">سفال، سرامیک و چینی</a>
                                                    <a href="#" class="sub-sub-category">کیف چرمی</a>
                                                    <a href="#" class="sub-sub-category">ترمه، قلم کار و دستباف</a>
                                                    <a href="#" class="sub-sub-category">خاتم، منبت، حصیری و چوبی</a>
                                                    <a href="#" class="sub-sub-category">تابلو و ساعت</a>
                                                    <a href="#" class="sub-sub-category">میناکاری</a>
                                                    <a href="#" class="sub-sub-category">فیروزه کوبی</a>
                                                    <a href="#" class="sub-sub-category">سوزن دوزی</a>
                                                    <a href="#" class="sub-sub-category">محصولات استخوانی</a>
                                                    <a href="#" class="sub-sub-category">جعبه و دست سازه های هنری</a>
                                                </section>
                                            </section>
                                        </section>
                                    </section>

                                    <section class="sublist-item">
                                        <section class="sublist-item-toggle">ورزش و سفر</section>
                                        <section class="sublist-item-sublist">
                                            <section class="sublist-item-sublist-wrapper d-flex justify-content-around align-items-center">
                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">پوشاک ورزشی مردانه</a>
                                                    <a href="#" class="sub-category">پوشاک ورزشی زنانه</a>
                                                    <a href="#" class="sub-category">کفش ورزشی مردانه</a>
                                                    <a href="#" class="sub-category">کفش ورزشی زنانه</a>
                                                    <a href="#" class="sub-category">پوشاک ورزشی پسرانه</a>
                                                    <a href="#" class="sub-category">پوشاک ورزشی دخترانه</a>
                                                    <a href="#" class="sub-category">کفش ورزشی پسرانه</a>
                                                    <a href="#" class="sub-category">کفش ورزشی دخترانه</a>
                                                    <a href="#" class="sub-category">تجهیزات سفر</a>
                                                    <a href="#" class="sub-sub-category">چمدان و ساک</a>
                                                    <a href="#" class="sub-sub-category">کیف و کوله پشتی</a>
                                                    <a href="#" class="sub-category">دوچرخه</a>
                                                    <a href="#" class="sub-sub-category">لوازم جانبی دوچرخه</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">کوهنوردی و کمپینگ</a>
                                                    <a href="#" class="sub-sub-category">کفش کوهنوردی</a>
                                                    <a href="#" class="sub-sub-category">عصای کوهنوردی</a>
                                                    <a href="#" class="sub-sub-category">چراغ قوه و چراغ پیشانی</a>
                                                    <a href="#" class="sub-sub-category">چاقو و ابزار چند کاره</a>
                                                    <a href="#" class="sub-sub-category">قمقمه و فلاسک</a>
                                                    <a href="#" class="sub-sub-category">چادر</a>
                                                    <a href="#" class="sub-sub-category">کیسه خواب</a>
                                                    <a href="#" class="sub-sub-category">زیرانداز سفری</a>
                                                    <a href="#" class="sub-category">لوازم جانبی کوهنوردی و سفر</a>
                                                    <a href="#" class="sub-category">چتر</a>
                                                    <a href="#" class="sub-category">ساک ورزشی</a>
                                                    <a href="#" class="sub-category">قمقمه و شیک</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">لوازم ورزشی</a>
                                                    <a href="#" class="sub-category">ورزش های هوازی و بدنسازی</a>
                                                    <a href="#" class="sub-sub-category">تجهیزات جانبی ایروبیک و تناسب اندام</a>
                                                    <a href="#" class="sub-sub-category">طناب</a>
                                                    <a href="#" class="sub-sub-category">بارفیکس</a>
                                                    <a href="#" class="sub-sub-category">تردمیل</a>
                                                    <a href="#" class="sub-sub-category">لوازم پوششی و محافظتی ورزشی</a>
                                                    <a href="#" class="sub-category">ورزش های توپی</a>
                                                    <a href="#" class="sub-sub-category">توپ</a>
                                                    <a href="#" class="sub-sub-category">راکت</a>
                                                    <a href="#" class="sub-category">ورزش های آبی</a>
                                                    <a href="#" class="sub-sub-category">ورزش های رزمی</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">اسکوتر برقی</a>
                                                    <a href="#" class="sub-category">اسکیت و اسکوتر</a>
                                                </section>
                                            </section>
                                        </section>
                                    </section>

                                    <section class="sublist-item">
                                        <section class="sublist-item-toggle">محصولات بومی و محلی</section>
                                        <section class="sublist-item-sublist">
                                            <section class="sublist-item-sublist-wrapper d-flex justify-content-around align-items-center">
                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">خوراکی های بومی و محلی</a>
                                                    <a href="#" class="sub-sub-category">حلواشکری، ارده و کنجد</a>
                                                    <a href="#" class="sub-sub-category">خرمای محلی</a>
                                                    <a href="#" class="sub-sub-category">عسل محلی</a>
                                                    <a href="#" class="sub-sub-category">عرقیات و گلاب اصیل</a>
                                                    <a href="#" class="sub-sub-category">ادویه و چاشنی محلی</a>
                                                    <a href="#" class="sub-sub-category">چای محلی</a>
                                                    <a href="#" class="sub-sub-category">زعفران، زرشک و تزئینات غذا</a>
                                                    <a href="#" class="sub-sub-category">سبزی خشک محلی</a>
                                                    <a href="#" class="sub-sub-category">حبوبات و سویای محلی</a>
                                                    <a href="#" class="sub-sub-category">قند و نبات محلی</a>
                                                    <a href="#" class="sub-sub-category">ماهی تازه</a>
                                                    <a href="#" class="sub-sub-category">روغن محلی</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">خانه و کاشانه بومی محلی</a>
                                                    <a href="#" class="sub-category">ظروف سنتی</a>
                                                    <a href="#" class="sub-sub-category">کاسه و کاسه بشقاب سنتی</a>
                                                    <a href="#" class="sub-sub-category">بشقاب سنتی</a>
                                                    <a href="#" class="sub-sub-category">پارچ سنتی</a>
                                                    <a href="#" class="sub-sub-category">لیوان سنتی</a>
                                                    <a href="#" class="sub-sub-category">قندان سنتی</a>
                                                    <a href="#" class="sub-sub-category">دیگ و قابلمه سنتی</a>
                                                    <a href="#" class="sub-sub-category">شکلات خوری دست ساز</a>
                                                    <a href="#" class="sub-category">ابزار آشپزخانه سنتی</a>
                                                    <a href="#" class="sub-sub-category">دیس و سینی سنتی</a>
                                                    <a href="#" class="sub-sub-category">تخته سرو سنتی</a>
                                                    <a href="#" class="sub-sub-category">سبد دستبافت سنتی</a>
                                                </section>

                                                <section class="sublist-column col">
                                                    <a href="#" class="sub-category">دکوراتیو سنتی</a>
                                                    <a href="#" class="sub-sub-category">آویز سرپرده سنتی</a>
                                                    <a href="#" class="sub-sub-category">کیس و کاور سنتی</a>
                                                    <a href="#" class="sub-sub-category">گلدان سنتی</a>
                                                    <a href="#" class="sub-sub-category">مجسمه سنتی</a>
                                                    <a href="#" class="sub-sub-category">چراغ خواب و آباژور</a>
                                                    <a href="#" class="sub-category">خواب و حمام</a>
                                                    <a href="#" class="sub-sub-category">کوسن سنتی</a>
                                                    <a href="#" class="sub-category">انواع قالی و قالیچه</a>
                                                    <a href="#" class="sub-sub-category">گلیم</a>
                                                    <a href="#" class="sub-category">پوشیدنی های بومی و محلی</a>
                                                    <a href="#" class="sub-sub-category">پوشاک بومی و محلی</a>
                                                    <a href="#" class="sub-sub-category">اکسسوری بومی و محلی</a>
                                                </section>

                                            </section>
                                        </section>
                                    </section>



                                </section>
                            </section>
                        </section>
                        <section class="border-start my-2 mx-1"></section>
                        <section class="navbar-item"><a href="#">سوپرمارکت</a></section>
                        <section class="navbar-item"><a href="#">تخفیف ها و پیشنهادها</a></section>
                        <section class="navbar-item"><a href="#">آمازون من</a></section>
                        <section class="navbar-item"><a href="#">آمازون پلاس</a></section>
                        <section class="navbar-item"><a href="#">درباره ما</a></section>
                        <section class="navbar-item"><a href="#">فروشنده شوید</a></section>
                        <section class="navbar-item"><a href="#">فرصت های شغلی</a></section>

                    </section>


                    <!--mobile view-->
                    <section class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="z-index: 9999999;">
                        <section class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel"><a class="text-decoration-none" href="index.html"><img src="assets/images/logo/8.png" alt="logo"></a></h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </section>
                        <section class="offcanvas-body">

                            <section class="navbar-item"><a href="#">سوپرمارکت</a></section>
                            <section class="navbar-item"><a href="#">تخفیف ها و پیشنهادها</a></section>
                            <section class="navbar-item"><a href="#">آمازون من</a></section>
                            <section class="navbar-item"><a href="#">آمازون پلاس</a></section>
                            <section class="navbar-item"><a href="#">درباره ما</a></section>
                            <section class="navbar-item"><a href="#">فروشنده شوید</a></section>
                            <section class="navbar-item"><a href="#">فرصت های شغلی</a></section>


                            <hr class="border-bottom">
                            <section class="navbar-item"><a href="javascript:void(0)">دسته بندی</a></section>
                            <!-- start sidebar nav-->
                            <section class="sidebar-nav mt-2 px-3">
                                <section class="sidebar-nav-item">
                                    <span class="sidebar-nav-item-title">کالای دیجیتال <i class="fa fa-angle-left"></i></span>
                                    <section class="sidebar-nav-sub-wrapper">
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                                <section class="sidebar-nav-item">
                                    <span class="sidebar-nav-item-title">خودرو ابزار و تجهیزات صنعتی <i class="fa fa-angle-left"></i></span>
                                    <section class="sidebar-nav-sub-wrapper">
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                                <section class="sidebar-nav-item">
                                    <span class="sidebar-nav-item-title">مد و پوشاک <i class="fa fa-angle-left"></i></span>
                                    <section class="sidebar-nav-sub-wrapper">
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                                <section class="sidebar-nav-item">
                                    <span class="sidebar-nav-item-title">اسباب بازی، کودک و نوزاد <i class="fa fa-angle-left"></i></span>
                                    <section class="sidebar-nav-sub-wrapper">
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                                <section class="sidebar-nav-item">
                                    <span class="sidebar-nav-item-title">کالاهای سوپرمارکتی <i class="fa fa-angle-left"></i></span>
                                    <section class="sidebar-nav-sub-wrapper">
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                                <section class="sidebar-nav-item">
                                    <span class="sidebar-nav-item-title">زیبایی و سلامت <i class="fa fa-angle-left"></i></span>
                                    <section class="sidebar-nav-sub-wrapper">
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                                <section class="sidebar-nav-item">
                                    <span class="sidebar-nav-item-title">خانه و آشپزخانه <i class="fa fa-angle-left"></i></span>
                                    <section class="sidebar-nav-sub-wrapper">
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                                <section class="sidebar-nav-item">
                                    <span class="sidebar-nav-item-title">کتاب، لوازم تحریر و هنر <i class="fa fa-angle-left"></i></span>
                                    <section class="sidebar-nav-sub-wrapper">
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                                <section class="sidebar-nav-item">
                                    <span class="sidebar-nav-item-title">ورزش و سفر <i class="fa fa-angle-left"></i></span>
                                    <section class="sidebar-nav-sub-wrapper">
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                                <section class="sidebar-nav-item">
                                    <span class="sidebar-nav-item-title">محصولات بومی و محلی <i class="fa fa-angle-left"></i></span>
                                    <section class="sidebar-nav-sub-wrapper">
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                        <section class="sidebar-nav-sub-item">
                                            <span class="sidebar-nav-sub-item-title"><a href="#">لوازم جانبی موبایل</a><i class="fa fa-angle-left"></i></span>
                                            <section class="sidebar-nav-sub-sub-wrapper">
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هدست</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">اسپیکر موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">پاوربانک</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هندزفری بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">قاب موبایل</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">هولدر نگهدارنده</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">شارژر بیسیم</a></section>
                                                <section class="sidebar-nav-sub-sub-item"><a href="#">مونوپاد</a></section>
                                            </section>
                                        </section>
                                    </section>
                                </section>

                            </section>
                            <!--end sidebar nav-->



                        </section>
                    </section>

                </nav>
            </section>
        </nav>
        <!-- end menu -->


    </header>
    <!-- end header -->



