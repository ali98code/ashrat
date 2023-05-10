@extends('admin.layouts.master')

@section('title', 'التصنيفات')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/libs/simple-datatables/style.css') }}">
@endsection

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
    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
        <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                    <h4 class="font-medium">التصنيفات</h4>
                </div><!--end header-title-->
                <div class="grid grid-cols-1 p-4">
                    <div class="sm:-mx-6 lg:-mx-8">
                        <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                            <table class="w-full" id="datatable_1">
                                <thead class="bg-gray-50 dark:bg-gray-600/20">
                                <tr>
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-right text-gray-700 dark:text-gray-400 uppercase">
                                        اسم التصنيف
                                    </th>
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-right text-gray-700 dark:text-gray-400 uppercase">
                                        التصنيف الأساسي
                                    </th>
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-right text-gray-700 dark:text-gray-400 uppercase">
                                        Slug
                                    </th>
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-right text-gray-700 dark:text-gray-400 uppercase">
                                        خيارات
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- 1 -->
                                <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        xyx@gmail.com
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        +123456789
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        <span class="bg-indigo-600/5 text-indigo-600 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">New Lead</span>
                                    </td>
                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        <a href="#"><i class="ti ti-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                        <a href="#"><i class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="button" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded mb-1 lg:mb-0 csv">تصدير إكسل</button>
                        </div>
                    </div>
                </div><!--end card-body-->
            </div> <!--end card-->
        </div><!--end col-->
    </div><!--end inner-grid-->
@endsection


@push('js')
    <script src="{{ asset('assets/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/pages/datatable.init.js') }}"></script>
@endpush
