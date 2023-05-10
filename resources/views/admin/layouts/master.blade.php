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
<div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-276px)] px-4 pt-[54px] duration-300">
        <!-- Page Title -->
        @yield('page_title')

        <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14 ">

            <!-- Alert Messages -->
            @include('admin.partials.messages')

            <!-- Main Content -->
            @yield('content')

            <!-- footer -->
            @include('admin.partials.footer')

        </div><!--end container-->
    </div>
</div>

<!-- JavaScript -->
@include('admin.partials.script-file')
</body>
</html>
