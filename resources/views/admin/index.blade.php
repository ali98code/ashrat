@extends('admin.layouts.master')

@section('page_title')
    <div class="xl:w-full">
        <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
                <div class="w-full">
                    <div class="">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-semibold text-xl mb-1 block dark:text-slate-100">Analytics</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="#" class="text-gray-500">Tailfox</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-gray-500">Dashboards</li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">Analytics</li>
                                </ol>
                            </div>
                            <div class="flex items-center">
                                <button class="px-3 py-2 lg:px-4 bg-blue-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-blue-600">Create New</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
@endsection

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4  mb-4">
        <div class=" sm:col-span-3 md:col-span-4 lg:col-span-4 xl:col-span-3">
            <div class="grid sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 gap-4">
                <div class="md:col-span-2 lg:col-span-1 xl:col-span-1">
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative">
                        <div class="flex justify-between xl:gap-x-2 items-cente">
                            <div class="relative overflow-hidden text-transparent -m-3">
                                <i data-feather="hexagon" class="h-20 w-20 fill-slate-500/5 group-hover:fill-white/10 mx-auto rotate-90 relative top-1"></i>
                                <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-slate-500 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                    <i class="ti ti-users text-3xl"></i>
                                </div>
                            </div>
                            <div class="self-center ml-auto">
                                <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">24k</h3>
                                <p class="text-gray-400 mb-0 font-medium">Sessions</p>
                            </div>
                        </div>
                    </div> <!--end inner-grid-->
                </div>
                <div class="md:col-span-2 lg:col-span-1 xl:col-span-1">
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative">
                        <div class="flex justify-between xl:gap-x-2 items-cente">
                            <div class="relative overflow-hidden text-transparent -m-3">
                                <i data-feather="hexagon" class="h-20 w-20 fill-slate-500/5 group-hover:fill-white/10 mx-auto rotate-90 relative top-1"></i>
                                <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-slate-500 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                    <i class="ti ti-clock text-3xl"></i>
                                </div>
                            </div>
                            <div class="self-center ml-auto">
                                <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">01<span class="text-sm text-slate-500">m</span>03<span class="text-sm text-slate-500">s</span></h3>
                                <p class="text-gray-400 mb-0 font-medium">Avg.Sessions</p>
                            </div>
                        </div>
                    </div> <!--end inner-grid-->
                </div>
                <div class="md:col-span-2 lg:col-span-1 xl:col-span-1">
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative">
                        <div class="flex justify-between xl:gap-x-2 items-cente">
                            <div class="relative overflow-hidden text-transparent -m-3">
                                <i data-feather="hexagon" class="h-20 w-20 fill-slate-500/5 group-hover:fill-white/10 mx-auto rotate-90 relative top-1"></i>
                                <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-slate-500 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                    <i class="ti ti-activity text-3xl"></i>
                                </div>
                            </div>
                            <div class="self-center ml-auto">
                                <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">$1800</h3>
                                <p class="text-gray-400 mb-0 font-medium">Bounce Rate</p>
                            </div>
                        </div>
                    </div> <!--end inner-grid-->
                </div>
                <div class="md:col-span-2 lg:col-span-1 xl:col-span-1">
                    <div class="bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative">
                        <div class="flex justify-between xl:gap-x-2 items-cente">
                            <div class="relative overflow-hidden text-transparent -m-3">
                                <i data-feather="hexagon" class="h-20 w-20 fill-slate-500/5 group-hover:fill-white/10 mx-auto rotate-90 relative top-1"></i>
                                <div class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-slate-500 rounded-xl group-hover:text-white transition-all duration-500 ease-in-out text-3xl flex align-middle justify-center items-center">
                                    <i class="ti ti-confetti text-3xl"></i>
                                </div>
                            </div>
                            <div class="self-center ml-auto">
                                <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">75000</h3>
                                <p class="text-gray-400 mb-0 font-medium truncate ">Goal Completions</p>
                            </div>
                        </div>
                    </div> <!--end inner-grid-->
                </div>
            </div>
        </div>

        <div class="md:row-span-1 lg:row-span-1 xl:row-span-2 md:col-span-4 lg:col-span-4 xl:col-span-1">
            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative h-full overflow-hidden">
                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                    <h4 class="font-medium">Sessions Device</h4>
                </div><!--end header-title-->
                <div class="flex-auto p-4">
                    <div id="ana_device" class="apex-charts"></div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <thead class="bg-gray-50 dark:bg-slate-600/20">
                                        <tr>
                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Device
                                            </th>
                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Sassions
                                            </th>
                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Day
                                            </th>
                                            <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Week
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- Product 1 -->
                                        <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                            <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-slate-300">
                                                Dasktops
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                1843
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                -3
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                -12
                                            </td>
                                        </tr>
                                        <!-- Product 2 -->
                                        <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                            <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-slate-300">
                                                Tablets
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                2543
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                -5
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                -2
                                            </td>
                                        </tr>
                                        <!-- Product 2 -->
                                        <tr class="bg-white dark:bg-gray-800">
                                            <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-slate-300">
                                                Mobiles
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                3654
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                -5
                                            </td>
                                            <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                -6
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end card-body-->
            </div> <!--end card-->

        </div>
        <div class="md:col-span-4 lg:col-span-4 xl:col-span-3">
            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative h-full">
                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                    <h4 class="font-medium">Audience Overview</h4>
                </div><!--end header-title-->
                <div class="flex-auto p-4">
                    <div class="chart-container" >
                        <canvas id="bar" height="290"></canvas>
                    </div>
                </div><!--end card-body-->
            </div> <!--end card-->
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 mb-4">
        <div class="sm:col-span-1  md:col-span-2 lg:col-span-4 xl:col-span-1 ">
            <div class="h-full bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                    <h4 class="font-medium dark:text-slate-300">Total Visits</h4>
                </div>
                <div class="flex-auto p-4">
                    <div id="map_1" class="w-full h-60"></div>
                    <div class="grid gap-0 xl:gap-4 grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-2 mt-2">
                        <div class="col-span-4 xs:col-span-1 sm:col-span-1 lg:col-span-2 xl:col-span-1 border-r-0 xs:border-r border-dashed dark:border-slate-700 border-b md:border-b-0 xl:border-b-0">
                            <div class="p-4 text-center">
                                <p class="my-1 font-semibold text-2xl inline-block relative dark:text-slate-300">$15,520 <span class="w-1 h-1 rounded-full bg-pink-500 absolute top-0 right-0"></span></p>
                                <h6 class="uppercase text-slate-400 mt-2 text-xs font-semibold">Domestic</h6>
                            </div>
                        </div>
                        <div class="col-span-4 xs:col-span-1 sm:col-span-1 lg:col-span-2 xl:col-span-1">
                            <div class="p-4 text-center">
                                <p class="my-1 font-semibold text-2xl inline-block relative dark:text-slate-300">$36,880 <span class="w-1 h-1 rounded-full bg-blue-500 absolute top-0 right-0"></span></p>
                                <h6 class="uppercase text-slate-400 mt-2 text-xs font-semibold">International</h6>
                            </div>
                        </div>
                    </div>
                </div><!--end card-body-->
                <div class="flex flex-col flex-auto p-4">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    <thead class="bg-gray-50 dark:bg-slate-700/20">
                                    <tr>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Channel
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Sessions
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Prev.Period
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            % Change
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- 1 -->
                                    <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                        <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                            <a href="" class="text-blue-500">Organic search</a>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            10853<small class="text-gray-400">(52%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            566<small class="text-gray-400">(92%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            52.80% <i class="ti ti-caret-up text-green-500 text-base"></i>
                                        </td>
                                    </tr>
                                    <!-- 2 -->
                                    <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                        <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                            <a href="" class="text-blue-500">Direct</a>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            10853<small class="text-gray-400">(52%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            566<small class="text-gray-400">(92%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            52.80% <i class="ti ti-caret-down text-red-500 text-base"></i>
                                        </td>
                                    </tr>
                                    <!-- 3 -->
                                    <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                        <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                            <a href="" class="text-blue-500">Referal</a>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            10853<small class="text-gray-400">(52%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            566<small class="text-gray-400">(92%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            52.80% <i class="ti ti-caret-up text-green-500 text-base"></i>
                                        </td>
                                    </tr>
                                    <!-- 4 -->
                                    <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                        <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                            <a href="" class="text-blue-500">Email</a>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            10853<small class="text-gray-400">(52%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            566<small class="text-gray-400">(92%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            52.80% <i class="ti ti-caret-down text-red-500 text-base"></i>
                                        </td>
                                    </tr>
                                    <!-- 5 -->
                                    <tr class="bg-white dark:bg-gray-800">
                                        <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                            <a href="" class="text-blue-500">Social</a>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            10853<small class="text-gray-400">(52%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            566<small class="text-gray-400">(92%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            52.80% <i class="ti ti-caret-up text-green-500 text-base"></i>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--end inner-grid-->
        </div>
        <div class="sm:col-span-1  md:col-span-2 lg:col-span-4 xl:col-span-1">
            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                    <h4 class="font-medium dark:text-slate-300">Active Users</h4>
                </div>
                <div class="flex-auto p-4">
                    <div id="Revenu_Status" class="apex-charts"></div>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                    <h4 class="font-medium dark:text-slate-300">Browser Used By Users</h4>
                </div>
                <div class="flex flex-col flex-auto p-4">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                    <thead class="bg-gray-50 dark:bg-slate-700/20">
                                    <tr>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Browser
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Sessions
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Bounce Rate
                                        </th>
                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Transactions
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- 1 -->
                                    <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                        <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                            <img src="{{ asset('assets/admin/images/logos/chrome.png') }}" alt="" class="mr-2 h-5 inline-block">Chrome
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            10853<small class="text-gray-400">(52%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            52.80%
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            566 <small class="text-gray-400">(92%)</small>
                                        </td>
                                    </tr>
                                    <!-- 2 -->
                                    <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                        <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                            <img src="{{ asset('assets/admin/images/logos/in-explorer.png') }}" alt="" class="mr-2 h-5 inline-block">Explorer
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            10853<small class="text-gray-400">(52%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            52.80%
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            566 <small class="text-gray-400">(92%)</small>
                                        </td>
                                    </tr>
                                    <!-- 3 -->
                                    <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                        <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                            <img src="{{ asset('assets/admin/images/logos/safari.png') }}" alt="" class="mr-2 h-5 inline-block">Safari
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            10853<small class="text-gray-400">(52%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            52.80%
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            566 <small class="text-gray-400">(92%)</small>
                                        </td>
                                    </tr>
                                    <!-- 4 -->
                                    <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                        <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                            <img src="assets/images/logos/mozilla.png" alt="" class="mr-2 h-5 inline-block">Mozilla
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            10853<small class="text-gray-400">(52%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            52.80%
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            566 <small class="text-gray-400">(92%)</small>
                                        </td>
                                    </tr>
                                    <!-- 5 -->
                                    <tr class="bg-white dark:bg-gray-800">
                                        <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                            <img src="assets/images/logos/opera.png" alt="" class="mr-2 h-5 inline-block">Opera
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            10853<small class="text-gray-400">(52%)</small>
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            52.80%
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            566 <small class="text-gray-400">(92%)</small>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!--end inner-grid-->
        </div>
    </div>
    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
        <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative h-full">
                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                    <h4 class="font-medium">Users at a Time</h4>
                </div><!--end header-title-->
                <div class="flex-auto p-4">
                    <div id="Users_Time" class="h-60 my-6"></div>
                </div><!--end card-body-->
            </div> <!--end card-->
        </div><!--end col-->
        <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                    <h4 class="font-medium">Live Visits Our New Site</h4>
                </div><!--end header-title-->
                <div class="flex-auto p-4">
                    <div id="visitors" class="h-60 my-6"></div>
                </div><!--end card-body-->
            </div> <!--end card-->
        </div><!--end col-->
    </div><!--end inner-grid-->
@endsection


@push('js')
    <script src="{{ asset('assets/admin/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/jsvectormap/maps/world.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pages/analytics-index.init.js') }}"></script>
@endpush
