<meta charset="utf-8" />
<title>لوحة التحكم - @yield('title', 'الرئيسية')</title>
<meta  name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}" />
<!-- Main Css -->
<link href="{{ asset('assets/admin/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/admin/css/icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/css/tailwind.css') }}">
<link rel="stylesheet" href="{{ asset('assets/admin/css/rtl.css') }}">

<style>
    .required::after {
        content: "*";
        color: red;
        margin-right: 2px;
    }
</style>
<!-- Custom Styles -->
@yield('style')
