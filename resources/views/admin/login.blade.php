<!DOCTYPE html>
<html lang="ar" class="light scroll-smooth" dir="rtl">
<head>
    <meta charset="utf-8" />
    <title>تسجيل الدخول</title>
    <meta  name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}" />


    <!-- Css -->
    <!-- Main Css -->
    <link href="{{ asset('assets/admin/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/tailwind.css') }}">

</head>

<body data-layout-mode="light"  data-sidebar-size="default" data-theme-layout="vertical" class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">


<div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
    <div class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
        <div class="text-center p-6 bg-slate-900 rounded-t">
            <a href="index.html"><img src="{{ asset('assets/admin/images/logo-sm.png') }}" alt="" class="w-14 h-14 mx-auto mb-2"></a>
            <h3 class="font-semibold text-white text-xl mb-1">Let's Get Started Tailfox</h3>
            <p class="text-xs text-slate-400">Sign in to continue to Tailfox.</p>
        </div>

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="p-4 mb-2 mx-2 mt-3 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <span class="font-medium">{{ $error }}
                </div>
            @endforeach
        @endif

        <form class="p-6" action="{{ route('admin.login_action') }}" method="post">
            @csrf
            <div>
                <label for="email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
                <input type="email" name="email" id="email" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Your Email" required>
            </div>
            <div class="mt-4">
                <label for="password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Your password</label>
                <input type="password" name="password" id="password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Password"  required>
            </div>
            <a href="#" class="text-xs font-medium text-primary-500 underline ">Forget Password?</a>
            <div class="block mt-3">
                <label class="custom-label block dark:text-slate-300">
                    <div class="bg-white dark:bg-slate-700  border border-slate-200 dark:border-slate-600 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                        <input type="checkbox" class="hidden">
                        <i class="fas fa-check hidden text-xs text-slate-700 dark:text-slate-200"></i>
                    </div>
                    Remember me
                </label>
            </div>
            <div class="mt-6">
                <button
                    type="submit"
                    class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Login
                </button>
            </div>
        </form>
        <p class="mb-5 text-sm font-medium text-center text-slate-500"> Don't have an account? <a href="auth-register.html"
                                                                                                  class="font-medium text-blue-600 hover:underline">Sign up</a>
        </p>
    </div>
</div>




<!-- JAVASCRIPTS -->
<script src="{{ asset('assets/admin/libs/@popperjs/core/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/components.js') }}"></script>

<script src="{{ asset('assets/admin/js/app.js') }}"></script>
<!-- JAVASCRIPTS -->
</body>
</html>
