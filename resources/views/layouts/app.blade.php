<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    @include('partials.head')
</head>
<body>
<!-- start header  -->
@include('partials.header')
<!-- end header  -->

    @yield('content')

<!-- start footer  -->
@include('partials.footer')
<!-- end footer  -->


<script src="https://kit.fontawesome.com/3162f5d9b2.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Custom Js -->
@stack('js')

</body>
</html>
