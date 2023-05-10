<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="description" content="عشرات" />
<meta name="keywords" content="عشرات" />

<!-- Title -->
<title>عشرات - @yield('title', 'الرئيسية')</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Icon -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />

<!-- Font -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/no-login.css') }}" />

<!-- Custom CSS -->
@yield('style')
