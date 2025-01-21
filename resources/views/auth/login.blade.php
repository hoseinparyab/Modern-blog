@extends('layouts.front.master')
@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
        Inner intro START -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8 col-xl-8 mx-auto ">
                        <div class="p-4 p-sm-5  rounded custom-box-shadow">
                            <h2>ورود به حساب کاربری</h2>
                            <!-- Form START -->
                            <form method="post" action="{{route('login')}}" class="mt-4">
                                @csrf
                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputEmail1">ایمیل</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="ایمیل">
                                    @error('email')
                                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword1">کلمه عبور</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="*********">
                                    @error('password')
                                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <!-- Checkbox -->
                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">مرا به خاطر بسپار</label>
                                </div>
                                <!-- Button -->
                                <div class="row align-items-center">
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-success">ورود

                                        </button>
                                    </div>
                                    <div class="col-sm-8 text-sm-end">
                                        <span>آیا هنوز ثبت نام نکرده اید؟ <a href="{{route('register')}}"><u>ثبت نام</u></a></span>
                                    </div>
                                </div>
                            </form>
                            <!-- Form END -->
                            <hr>
                            <!-- Social-media btn -->
                            <div class="text-center">
                                <p class="mb-4 mt-3">برای دسترسی سریع با شبکه اجتماعی خود وارد شوید</p>
                                <ul class="list-unstyled d-sm-flex mt-3 justify-content-center mb-0">
                                    <li class="mx-2">
                                        <a href="{{route('auth.redirect','github')}}" class="btn btn-light d-inline-block fs-6">github<i
                                                class="fab fa-github text-dark align-middle ms-2 fs-5"></i></a>
                                    </li>
                                    <li class="mx-2">
                                        <a href="{{route('auth.redirect','google')}}" class="btn btn-light d-inline-block fs-6">google<i class="fab fa-google text-danger align-middle ms-2 fs-5"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Inner intro END -->

    </main>
    <script>
        function showLoading() {
            document.getElementById('loading').style.display = 'block';
        }
    </script>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
