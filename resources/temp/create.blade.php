@extends('admin.layouts.master')

@section('title', 'إضافة تصنيف جديد')

@section('page_title')
    <div class="xl:w-full">
        <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
                <div class="w-full">
                    <div class="">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-semibold text-xl mb-1 block dark:text-slate-100">إضافة تصنيف جديد</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="{{ route('admin.dashboard') }}" class="text-gray-500">لوحة التحكم</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li><a href="{{ route('admin.categories.index') }}" class="text-gray-500">التصنيفات</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">إضافة تصنيف جديد</li>
                                </ol>
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
                    <h4 class="font-medium">إضافة تصنيف جديد</h4>
                </div><!--end header-title-->
                <div class="grid grid-cols-1 p-4">
                    <div class="sm:-mx-6 lg:-mx-8">
                        <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                            <form action="{{ route('admin.categories.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2">
                                    <label for="name" class="font-medium text-sm text-slate-600 dark:text-slate-400 required">اسم التصنيف</label>
                                    <input type="text" name="name" id="name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" required="">
                                </div>
                                <div class="mb-4">
                                    <label for="input-file" class="font-medium text-sm text-slate-600 dark:text-slate-400 required">صورة التصنيف</label>
                                    <div class="preview-box mt-3 block w-[170px] h-[170px] justify-center rounded overflow-hidden bg-slate-50 dark:bg-slate-900/20 p-4 mb-4"></div>
                                    <input type="file" id="input-file" name="image" accept="image/*" onchange={handleChange()} hidden />
                                    <label class="btn-upload text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 font-medium rounded text-sm px-3 py-2 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600" for="input-file">
                                        <i class="ti ti-upload"></i>
                                        رفع صورة
                                    </label>
                                </div>
                                <div class="mb-2">
                                    <label for="parent_id" class="font-medium text-sm text-slate-600 dark:text-slate-400">التصنيف الأساسي</label>
                                    <select id="parent_id" name="parent_id" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                        <option value="" selected="">اختر</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="text-white bg-primary-500 hover:bg-primary-600 -300 font-medium rounded text-sm px-3 py-2 my-2 dark:bg-primary-500 dark:hover:bg-primary-600 focus:outline-none">حفظ</button>
                            </form>
                        </div>
                    </div>
                </div><!--end card-body-->
            </div> <!--end card-->
        </div><!--end col-->
    </div><!--end inner-grid-->
@endsection

@push('js')
    <script>
        // Preview Uploaded Image
        const handleChange = function() {
            const fileUploader = document.querySelector('#input-file');
            const getFile = fileUploader.files
            if (getFile.length !== 0) {
                const uploadedFile = getFile[0];
                readFile(uploadedFile);
            }
        }
        const readFile = function (uploadedFile) {
            if (uploadedFile) {
                const reader = new FileReader();
                reader.onload = function () {
                    const parent = document.querySelector('.preview-box');
                    parent.innerHTML = `<img class="preview-content" src=${reader.result} />`;
                };

                reader.readAsDataURL(uploadedFile);
            }
        };
    </script>
@endpush
