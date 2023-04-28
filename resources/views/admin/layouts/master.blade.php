<!DOCTYPE html>
<html lang="ar" class="light scroll-smooth" dir="rtl">
<head>
@include('admin.partials.head')
</head>
<body data-layout-mode="light"  data-sidebar-size="default" data-theme-layout="vertical" class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">

<!-- Sidebar -->
@include('admin.partials.left-sidebar')

<!-- Topbar -->
@include('admin.partials.topbar')

<!-- Content -->
@yield('content')

<!-- JavaScript -->
@include('admin.partials.script-file')

<!-- Custom JavaScript -->
@yield('js')
</body>
</html>
