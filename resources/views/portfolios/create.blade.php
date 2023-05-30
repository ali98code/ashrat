@extends('layouts.app')

@section('title', 'إضافة عمل جديد')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <style>
        .select2 {
            width: 100% !important;
            box-shadow: var(--box-shadow);
            border: 1px solid var(--light-color);
            padding: 5px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            font-size: 0.8rem;
        }

        .select2-selection {
            border: 0 !important;
        }
    </style>
@endsection

@section('content')
    <main class="create-tab create-service job">
        <div class="container">
            <div class="columns">
                <div class="column-right">
                    <div class="job-box">
                        <div class="header">
                            <p class="title">
                                <i class="far fa-images"></i>
                                أضف عمل جديد
                            </p>
                        </div>
                        <div class="body">
                            <form action="{{ route('portfolios.store') }}" method="post" enctype="multipart/form-data">

                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @csrf
                                <div class="input required">
                                    <label for="title"> اسم العمل </label>
                                    <input
                                        class="stritch-input"
                                        type="text"
                                        name="title"
                                        id="title"
                                        placeholder="العنوان"
                                    />
                                </div>
                                <div class="input required desc-textarea">
                                    <label for="description"> وصف العمل </label>
                                    <textarea
                                        name="description"
                                        id="description"
                                        cols="30"
                                        rows="10"
                                    ></textarea>
                                </div>
                                <div class="row-inputs row-inputs-images">
                                    <div class="input required file-upload-div">
                                        <label for="image">الصورة المصغرة للعمل</label>
                                        <label class="file-upload-label" for="image">
                                            <i class="fa-solid fa-image"></i>
                                            ارفع صورة
                                        </label>
                                        <input
                                            class="file-upload-input"
                                            type="file"
                                            id="image"
                                            name="image"
                                            onchange="readImage(this);"
                                        />
                                        <img id="image-holder" src="#" alt=""/>
                                    </div>
                                </div>

                                <div class="row-inputs row-inputs-images">
                                    <div class="input file-upload-div">
                                        <label for="files">المرفقات</label>
                                        <label class="file-upload-label" for="files">
                                            <i class="fa-solid fa-file"></i>
                                            ارفع مرفقات
                                        </label>
                                        <input
                                            class="file-upload-input"
                                            type="file"
                                            id="files"
                                            name="files[]"
                                            multiple
                                        />
                                    </div>
                                </div>
                                <div class="input required skills-sec d-none">
                                    <label for="skills">
                                        المهاراة المستخدمة في العمل
                                    </label>
                                    <select class="skills_select2" name="skills[]" id="skills" multiple="multiple">
                                        <option value="php">PHP</option>
                                        <option value="html">HTML</option>
                                        <option value="css">CSS</option>
                                        <option value="js">JS</option>
                                    </select>
                                </div>
                                <div class="input">
                                    <label for="link">
                                        رابط العمل
                                        <span class="little-info">(إختياري)</span>
                                    </label>
                                    <input
                                        class="stritch-input"
                                        type="text"
                                        name="link"
                                        id="link"
                                        placeholder="الرابط كامل"
                                    />
                                </div>
                                <button class="primary-butt" type="submit">أضف العمل</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="column-left">
                    <div class="job-box create-detalis">
                        <div class="body">
                            <p class="p-with-green-back fw-bold text-center">
                                إنشر خدمتك المصغرة على عشرات
                            </p>
                            <span class="small m-3 d-block"
                            >تساعدك منصة عشرات على الربح من مهاراتك عن طريق نشر خدمتك بداً
                  من 5 دولار والوصول إلى ألاف المشتريين المهتميين. فقط أضف خدمتك
                  وبمجرد قبولها من الإدارة, تصبح متاحة للجميع</span
                            >
                            <span
                                class="fw-bold p-with-blue-back d-block mt-3 mb-3 text-center"
                            >
                  نصائح لإضافة خدمتك
                </span>
                            <ul>
                                <li>
                    <span class="small m-3 d-block"
                    >قم بوضح عنوان واضح ومعبر عن خدمتك وما تقدمه</span
                    >
                                </li>
                                <li>
                    <span class="small m-3 d-block"
                    >أضف قسم ومهارات مناسبه لخدمتك حتى يسهل على المستخدمين
                      الوصول لها
                    </span>
                                </li>
                                <li>
                    <span class="small m-3 d-block"
                    >اوصف خدمتك باللغة العربيه بشكل واضح حتى يسهل على المشتري
                      فهم ما سوف يحصل عليه من خدمتك
                    </span>
                                </li>
                                <li>
                    <span class="small m-3 d-block"
                    >أضف صوره رئيسيه معبره جذابه بجودة عاليه لخدمتك
                    </span>
                                </li>
                                <li>
                    <span class="small m-3 d-block"
                    >أكتب تعليماتك للمشتري بشكل مختصر حتى تظهر له التعليمات
                      بعد شراءه لخدمتك
                    </span>
                                </li>
                                <li>
                    <span class="small m-3 d-block"
                    >أضف سعر مناسب و منافس للخدمة التى تقدمها بعد الإطلاع على
                      الخدمات الشبيهه على المنصة
                    </span>
                                </li>
                            </ul>
                            <p class="p-with-green-back fw-bold text-center">
                                عشرات يضمن حقوقك
                            </p>
                            <span class="small m-3 d-block"
                            >تساعدك منصة عشرات على الربح من مهاراتك عن طريق نشر خدمتك بداً
                  من 5 دولار والوصول إلى ألاف المشتريين المهتميين. فقط أضف خدمتك
                  وبمجرد قبولها من الإدارة, تصبح متاحة للجميع</span
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@push('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.skills-sec').removeClass('d-none');
            $('.skills_select2').select2();
        })
    </script>
@endpush
