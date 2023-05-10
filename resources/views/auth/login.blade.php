@extends('layouts.app')

@section('title', 'تسجيل الدخول')

@section('content')
    <main class="login">
        <div class="container">
{{--            <div class="other-login">--}}
{{--                <p>يمكنك الدخول باستخدام</p>--}}
{{--                <div class="logins">--}}
{{--                    <button class="google"><i class="fa-brands fa-google"></i></button>--}}
{{--                    <button class="twitter">--}}
{{--                        <i class="fa-brands fa-twitter"></i>--}}
{{--                    </button>--}}
{{--                    <button class="facebook">--}}
{{--                        <i class="fa-brands fa-facebook-f"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
            <form action="{{ route('login') }}" method="post">
                @csrf

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <p>تسجيل الدخول</p>
                <div class="email">
                    <label for="email">البريد الالكتروني</label>
                    <input type="text" name="email" id="email" />
                </div>
                <div class="password">
                    <label for="password"> كلمة السر</label>
                    <input type="password" name="password" id="password" />
                </div>
                <div class="remember">
                    <input type="checkbox" id="remember" name="remember" />
                    <label for="remember"> تذكرني</label>
                </div>
                <input class="primary-butt" type="submit" value="تسجيل الدخول" />
            </form>
            <div class="help">
                <a href="{{ route('register') }}"> لا أملك حساب بعد</a>
                <a href=""> نسيت كلمة المرور </a>
            </div>
        </div>
    </main>
@endsection
