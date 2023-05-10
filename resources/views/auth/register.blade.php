@extends('layouts.app')

@section('title', 'حساب جديد')

@section('content')
    <main class="register">
        <div class="container">
{{--            <div class="other-login">--}}
{{--                <p>يمكنك التسجيل باستخدام</p>--}}
{{--                <div class="logins">--}}
{{--                    <button class="google">--}}
{{--                        <i class="fa-brands fa-google"></i>--}}
{{--                    </button>--}}
{{--                    <button class="twitter">--}}
{{--                        <i class="fa-brands fa-twitter"></i>--}}
{{--                    </button>--}}
{{--                    <button class="facebook">--}}
{{--                        <i class="fa-brands fa-facebook-f"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
            <form action="{{ route('register') }}" method="post">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <p>التسجيل</p>
                <div class="name">
                    <label for="first_name"> الاسم الأول</label>
                    <input type="text" name="first_name" id="first_name" />
                </div>
                <div class="name">
                    <label for="last_name"> الاسم الأخير</label>
                    <input type="text" name="last_name" id="last_name" />
                </div>
                <div class="name">
                    <label for="username">اسم المستخدم</label>
                    <input type="text" name="username" id="username" />
                </div>
                <div class="email">
                    <label for="email">البريد الالكتروني</label>
                    <input type="text" name="email" id="email" />
                </div>
                <div class="password">
                    <label for="password"> كلمة السر</label>
                    <input type="password" name="password" id="password" />
                </div>
                <div class="password">
                    <label for="password_confirmation"> تاكيد كلمة السر</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" />
                </div>
                <div class="remember">
                    <input type="checkbox" id="remember" name="remember" />
                    <label for="remember">
                        بتسجيلك في منصة عشرات فإنك توافق علي شروط الاستخدام و سياسة
                        الخصوصية</label
                    >
                </div>
                <input class="primary-butt" type="submit" value=" انشاء حساب" />
            </form>
        </div>
    </main>
@endsection
