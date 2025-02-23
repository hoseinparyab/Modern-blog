@extends('layouts.front.master')
@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
        Inner intro START -->
        <section class="pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Author info START -->
                        <div class="bg-primary bg-opacity-10 d-md-flex p-3 p-sm-4 my-3 text-center text-md-start rounded">
                            <!-- Avatar -->
                            <div class=" me-0 me-md-4">
                                <div class="avatar avatar-xxl">
                                    <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="avatar">
                                </div>
                                <!-- Post count -->
                                <div class="text-center mt-n3 position-relative">
                                    <span class="badge bg-danger fs-6">6 خبر</span>
                                </div>
                            </div>
                            <!-- Info -->
                            <div>
                                <h2 class="m-0">وحید صالحی</h2>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="bi bi-person-fill me-1"></i> سردبیر</li>
                                    <li class="list-inline-item"><i class="bi bi-geo-alt me-1"></i> نیویورک</li>
                                </ul>
                                <p class="my-2">در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                <!-- Social icons -->
                                <ul class="nav justify-content-center justify-content-md-start">
                                    <li class="nav-item">
                                        <a class="nav-link ps-0 pe-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Author info END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Inner intro END -->

        <!-- =======================
        Main content START -->
        <section class="position-relative pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-3">
                        <h2>اخبار علیرضا اکبری</h2>
                    </div>
                    <!-- Main Post START -->
                    <div class="col-12">
                        <div class="row gy-4">
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{Vite::image('blog/4by3/14.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">فیلم‌های بالیوودی الگوی ضدانقلاب شده!</a></h4>
                                        <p class="card-text">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی...</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">22 آذر، 1400</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{Vite::image('blog/4by3/15.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <div class="text-end ms-auto">
                                                    <!-- Card format icon -->
                                                    <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
                                                </div>
                                            </div>
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>
                                                    گردشگری</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">رازهای کوچک کثیف در مورد صنعت تجارت</a></h4>
                                        <p class="card-text">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی...</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">7 دی، 1400</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{Vite::image('blog/4by3/16.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>اقتصاد</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">عادات بدی که افراد در صنعت باید آنها را ترک کنند!</a></h4>
                                        <p class="card-text">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی...</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">17 تیر، 1400</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{Vite::image('blog/4by3/13.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>ورزش</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">سال 2022 رویایی و فوق العاده برای طارمی</a></h4>
                                        <p class="card-text">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی...</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">29 مرداد، 1400</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{Vite::image('blog/4by3/12.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <div class="text-end ms-auto">
                                                    <!-- Card format icon -->
                                                    <div class="icon-md bg-white bg-opacity-10 bg-blur text-white rounded-circle" title="This post has audio"><i class="fas fa-volume-up"></i></div>
                                                </div>
                                            </div>
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>تکنولوژی</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">رونمایی از طرح بزرگترین تلسکوپ نوری آسیا</a></h4>
                                        <p class="card-text">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی...</p>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">11 دی، 1410</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="{{Vite::image('blog/4by3/11.jpg')}}" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <!-- Card category -->
                                                <a href="#" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>رسانه</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-3">
                                        <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset">طرح مجلس برای گرفتن مالیات از سفته بازها</a></h4>
                                        <p class="card-text">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی...p>
                                            <!-- Card info -->
                                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                            <li class="nav-item">
                                                <div class="nav-link">
                                                    <div class="d-flex align-items-center position-relative">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/vahid.jpeg')}}" alt="avatar">
                                                        </div>
                                                        <span class="ms-3">با <a href="#" class="stretched-link text-reset btn-link">وحید صالحی</a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">1 خرداد، 1400</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                            <!-- Load more START -->
                            <div class="col-12 text-center mt-5">
                                <button type="button" class="btn btn-primary-soft">مقالات بیشتر <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
                            </div>
                            <!-- Load more END -->
                        </div>
                    </div>
                    <!-- Main Post END -->
                </div> <!-- Row end -->
            </div>
        </section>
        <!-- =======================
        Main content END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
