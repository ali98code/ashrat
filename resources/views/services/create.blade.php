@extends('layouts.app')

@section('title', 'إضافة خدمة جديدة')

@section('style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                                <i class="far fa-list-alt"></i>
                                أضف خدمة مصغرة
                            </p>
                        </div>
                        <div class="body">
                            <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">

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
                                    <label for="service-title"> ماذا سوف تقدم في الخدمة </label>
                                    <input
                                        class="stritch-input"
                                        type="text"
                                        name="title"
                                        id="service-title"
                                        placeholder="العنوان"
                                    />
                                </div>
                                <div class="row-inputs">
                                    <div class="input required">
                                        <label for="section"> القسم </label>
                                        <select id="section" onchange="getSubCategories(event)">
                                            <option value="" selected="" disabled="">القسم</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input required">
                                        <label for="sec-section" id="sub_categories">
                                            قسم فرعي
                                        </label>
                                        <select name="category_id" id="sec-section">
                                        </select>
                                    </div>
                                </div>
                                <div class="input required desc-textarea">
                                    <label for="service-desc"> وصف الخدمة </label>
                                    <textarea
                                        name="description"
                                        id="service-desc"
                                        cols="30"
                                        rows="10"
                                    ></textarea>
                                </div>
                                <div class="row-inputs row-inputs-images">
                                    <div class="input required file-upload-div">
                                        <label for="images">صور الخدمة</label>
                                        <label class="file-upload-label" for="images">
                                            <i class="fa-solid fa-image"></i>
                                            ارفع الصور
                                        </label>
                                        <input
                                            class="file-upload-input"
                                            type="file"
                                            id="images"
                                            name="images"
                                            onchange="readImage(this);"
                                        />
                                        <img id="images-holder" src="#" alt="" />
                                    </div>
                                </div>
                                <div class="input">
                                    <label for="video_link">
                                        فيديو الخدمة
                                        <span class="little-info">(إختياري)</span>
                                    </label>
                                    <input
                                        class="stritch-input"
                                        type="text"
                                        name="video_link"
                                        id="video_link"
                                        placeholder="لينك الفيديو"
                                    />
                                </div>
                                <div class="input required desc-textarea">
                                    <label for="service-instructions"> تعليمات للمشتري </label>
                                    <textarea
                                        name="notes"
                                        id="service-instructions"
                                        cols="30"
                                        rows="10"
                                    ></textarea>
                                </div>
                                <div class="input required skills-sec d-none">
                                    <label for="skills">
                                        مهاراتك
                                    </label>
                                    <select class="skills_select2" name="skills[]" id="skills" multiple="multiple">
                                        <option value="php">PHP</option>
                                        <option value="html">HTML</option>
                                        <option value="css">CSS</option>
                                        <option value="js">JS</option>
                                    </select>
                                </div>
                                <div class="row-inputs">
                                    <div class="input required">
                                        <label for="price "> السعر </label>
                                        <input
                                            type="text"
                                            name="price"
                                            id="price"
                                            class="stritch-input"
                                        />
                                    </div>
                                    <div class="input required">
                                        <label for="duration"> مدة التسليم </label>
                                        <select name="delivery_days" id="duration">
                                            <option value="" selected="" disabled="">
                                                مدة التسليم
                                            </option>
                                            <option value="1">يوم</option>
                                            <option value="2">يومين</option>
                                            <option value="3">3 أيام</option>
                                            <option value="4">4 أيام</option>
                                            <option value="5">5 أيام</option>
                                            <option value="6">6 أيام</option>
                                            <option value="7">7 أيام</option>
                                            <option value="8">8 أيام</option>
                                            <option value="9">9 أيام</option>
                                            <option value="10">10 أيام</option>
                                            <option value="11">11 يوم</option>
                                            <option value="12">12 يوم</option>
                                            <option value="13">13 يوم</option>
                                            <option value="14">14 يوم</option>
                                            <option value="15">15 يوم</option>
                                            <option value="16">16 يوم</option>
                                            <option value="17">17 يوم</option>
                                            <option value="18">18 يوم</option>
                                            <option value="19">19 يوم</option>
                                            <option value="20">20 يوم</option>
                                            <option value="21">21 يوم</option>
                                            <option value="22">22 يوم</option>
                                            <option value="23">23 يوم</option>
                                            <option value="24">24 يوم</option>
                                            <option value="25">25 يوم</option>
                                            <option value="26">26 يوم</option>
                                            <option value="27">27 يوم</option>
                                            <option value="28">28 يوم</option>
                                            <option value="29">29 يوم</option>
                                            <option value="30">30 يوم</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="secondary-butt add-another">
                                    أضف إضافة ثانية لخدمتك<i class="fas fa-plus-square"></i>
                                </div>
                                <div class="another another-hide">
                                    <div class="input required">
                                        <label for="another-service-title">
                                            الإضافة الثانية
                                        </label>
                                        <input
                                            class="stritch-input"
                                            type="text"
                                            name="another-service-title"
                                            id="another-service-title"
                                            placeholder="العنوان"
                                        />
                                    </div>
                                    <div class="row-inputs">
                                        <div class="input required">
                                            <label for="another-price">
                                                السعر يضاف لسعر الخدمة الأساسية
                                            </label>
                                            <input
                                                type="text"
                                                name="another-price"
                                                id="another-price"
                                            />
                                        </div>
                                        <div class="input required">
                                            <label for="another-duration">
                                                زمن يضاف إلى زمن تنفيذ الخدمة
                                            </label>
                                            <select name="another-duration" id="another-duration">
                                                <option value="" selected="" disabled="">
                                                    مدة التسليم
                                                </option>
                                                <option value="1">يوم</option>
                                                <option value="2">يومين</option>
                                                <option value="3">3 أيام</option>
                                                <option value="4">4 أيام</option>
                                                <option value="5">5 أيام</option>
                                                <option value="6">6 أيام</option>
                                                <option value="7">7 أيام</option>
                                                <option value="8">8 أيام</option>
                                                <option value="9">9 أيام</option>
                                                <option value="10">10 أيام</option>
                                                <option value="11">11 يوم</option>
                                                <option value="12">12 يوم</option>
                                                <option value="13">13 يوم</option>
                                                <option value="14">14 يوم</option>
                                                <option value="15">15 يوم</option>
                                                <option value="16">16 يوم</option>
                                                <option value="17">17 يوم</option>
                                                <option value="18">18 يوم</option>
                                                <option value="19">19 يوم</option>
                                                <option value="20">20 يوم</option>
                                                <option value="21">21 يوم</option>
                                                <option value="22">22 يوم</option>
                                                <option value="23">23 يوم</option>
                                                <option value="24">24 يوم</option>
                                                <option value="25">25 يوم</option>
                                                <option value="26">26 يوم</option>
                                                <option value="27">27 يوم</option>
                                                <option value="28">28 يوم</option>
                                                <option value="29">29 يوم</option>
                                                <option value="30">30 يوم</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="secondary-butt add-package">
                                    أضف باقات<i class="fas fa-plus-square"></i>
                                </div>
                                <div class="packages my-table another-hide">
                                    <p>الباقات</p>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">اساسي</th>
                                            <th scope="col">قياسي</th>
                                            <th scope="col">متميز</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input type="text" placeholder="اسم الباقة" />
                                            </td>
                                            <td>
                                                <input type="text" placeholder="اسم الباقة" />
                                            </td>
                                            <td>
                                                <input type="text" placeholder="اسم الباقة" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                            <textarea
                                placeholder="اوصف الباقة التي تقدمها "
                                name=""
                                id=""
                                cols="15"
                                rows="8"
                            ></textarea>
                                            </td>
                                            <td>
                            <textarea
                                placeholder="اوصف الباقة التي تقدمها "
                                name=""
                                id=""
                                cols="15"
                                rows="8"
                            ></textarea>
                                            </td>
                                            <td>
                            <textarea
                                placeholder="اوصف الباقة التي تقدمها "
                                name=""
                                id=""
                                cols="15"
                                rows="8"
                            ></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <select name="" id="">
                                                    <option>وقت التوصيل</option>
                                                    <option value="">3 ايام</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option>وقت التوصيل</option>
                                                    <option value="">3 ايام</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option>وقت التوصيل</option>
                                                    <option value="">3 ايام</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>المراجعات</td>
                                            <td>
                                                <select name="" id="">
                                                    <option>اختار</option>
                                                    <option value="">2</option>
                                                </select>
                                            </td>

                                            <td>
                                                <select name="" id="">
                                                    <option>اختار</option>
                                                    <option value="">2</option>
                                                </select>
                                            </td>

                                            <td>
                                                <select name="" id="">
                                                    <option>اختار</option>
                                                    <option value="">2</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>عدد العناصر المرفقة</td>
                                            <td>
                                                <select name="" id="">
                                                    <option>اختار</option>
                                                    <option value="">2</option>
                                                </select>
                                            </td>

                                            <td>
                                                <select name="" id="">
                                                    <option>اختار</option>
                                                    <option value="">2</option>
                                                </select>
                                            </td>

                                            <td>
                                                <select name="" id="">
                                                    <option>اختار</option>
                                                    <option value="">2</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ملف المصدر</td>
                                            <td>
                                                <input type="checkbox" name="" id="" />
                                            </td>
                                            <td>
                                                <input type="checkbox" name="" id="" />
                                            </td>
                                            <td>
                                                <input type="checkbox" name="" id="" />
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <button class="primary-butt" type="submit">أضف الخدمة</button>
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
        $(document).ready(function() {
            $('.skills-sec').removeClass('d-none');
            $('.skills_select2').select2();
        })
    </script>
    <script>
        let getSubCategories = function (e) {
            let id = e.target.value
            $('#sub_categories').append('<i class="fa fa-spin fa-spinner sub_categories_loader"></i>')
            $.ajax({
                url: "/ajax/get-sub-categories/" + id,
                success: function (data) {
                    data.forEach((el) => {
                        $('#sec-section').append('<option value="'+ el.id +'">'+ el.name +'</option>')
                    })
                    $('.sub_categories_loader').remove()
                }
            })
        }
    </script>
@endpush
