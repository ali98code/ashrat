@extends('admin.layouts.master')

@section('title', 'المستخدمين')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/simple-datatables/style.css') }}">
@endsection

@section('page_title')
    <div class="xl:w-full">
        <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
                <div class="w-full">
                    <div class="">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-semibold text-xl mb-1 block dark:text-slate-100">المستخدمين</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="{{ route('admin.dashboard') }}" class="text-gray-500">لوحة التحكم</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">المستخدمين</li>
                                </ol>
                            </div>
                            <div class="flex items-center">
                                <a href="{{ route('admin.users.create') }}" class="px-3 py-2 lg:px-4 bg-blue-500 collapse:bg-green-100 text-white text-sm font-semibold rounded hover:bg-blue-600">إضافة</a>
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
                    <h4 class="font-medium">المستخدمين</h4>
                </div><!--end header-title-->
                <div class="grid grid-cols-1 p-4">
                    <div class="sm:-mx-6 lg:-mx-8">
                        <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                            <table class="w-full" id="datatable_1">
                                <thead class="bg-gray-50 dark:bg-gray-600/20">
                                <tr>
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-right text-gray-700 dark:text-gray-400 uppercase">
                                        الاسم
                                    </th>
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-right text-gray-700 dark:text-gray-400 uppercase">
                                        البريد الإلكتروني
                                    </th>
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-right text-gray-700 dark:text-gray-400 uppercase">
                                        تاريخ الإنضمام
                                    </th>
                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-right text-gray-700 dark:text-gray-400 uppercase">
                                        خيارات
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $user)
                                    <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{ $user->name }}
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{ $user->email }}
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            {{ $user->created_at->format("Y-m-d") }}
                                        </td>
                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            <a href="{{ route('admin.users.edit', $user->id) }}"><i class="ti ti-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                            <a href="javascript:void(0)" onclick="delFunction({{ $user->id }})">
                                                <i class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i>
                                            </a>
                                            <form id="delete-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="post" class="hidden">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

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
    <script src="{{ asset('assets/admin/libs/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pages/datatable.init.js') }}"></script>

    <script>
        let delFunction = function (id) {

            if(confirm("هل أنت متأكد؟")) {
                document.getElementById('delete-form-' + id).submit()
            } else {
                return false
            }

        }
    </script>
@endpush
