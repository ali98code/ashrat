@extends('layouts.app')

@section('title', 'بيانات العمل')

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
    <main class="dashboard sub-dashboard setting-tab job">
        <div class="container">
            <div class="setting-tab-contents contents">
                <div class="columns">
                    <div class="column-right">
                        @include('partials.settings.side_menu')
                    </div>
                    <div class="column-left">
                        <div class="job-box no-border job-box-low-padding">
                            <div class="header">
                                <p class="title">
                                    <i class="fas fa-cogs"></i>
                                    الإعدادات
                                </p>
                            </div>
                            <div class="body no-border">
                                @include('partials.settings.menu', ["active" => "work"])
                                <form action="{{ route('settings.work_update') }}" method="post" class="form details-form">
                                    @csrf

                                    @include('partials.messages.error')

                                    <div class="input required">
                                        <label class="fw-bold"> نوع الحساب </label>
                                        <div class="checks">
                                            <div class="check-optn">
                                                <input
                                                    type="checkbox"
                                                    name="account_type[]"
                                                    value="1"
                                                    id="freelancer"
                                                    {{ $user->profile->account_type != 2 ? 'checked' : '' }}
                                                />
                                                <label for="freelancer"
                                                >مستقل: ( بائع خدمات | منفذ مشاريع | المتسابق
                                                    )</label
                                                >
                                            </div>
                                            <div class="check-optn">
                                                <input
                                                    type="checkbox"
                                                    name=""
                                                    id="available"
                                                />
                                                <label for="available"
                                                >متاح للتوظيف: (إزاله هذه الإشاره ستخفي حسابك بشكل
                                                    مؤقت من نتائج البحث)</label
                                                >
                                            </div>
                                            <div class="check-optn">
                                                <input
                                                    type="checkbox"
                                                    name="account_type[]"
                                                    value="2"
                                                    id="buyer"
                                                    {{ $user->profile->account_type != 1 ? 'checked' : '' }}
                                                />
                                                <label for="buyer"
                                                >مشتري: ( صاحب مشاريع | مشتري خدمات | صاحب مسابقات
                                                    )</label
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row-inputs">
                                        <div class="input">
                                            <label for="category_id"> تخصص </label>
                                            <select name="category_id" id="category_id">
                                                <option value="" selected="" disabled="">
                                                    اختر
                                                </option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $category->id == $user->profile->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="input">
                                            <label for="job_title"> المسمي الوظيفي </label>
                                            <input type="text" name="job_title" id="job_title" value="{{ $user->profile->job_title }}" />
                                        </div>
                                    </div>
                                    <div class="input skills-sec">
                                        <label for="specialties"> مهاراتك </label>
                                        @php
                                        $skills = explode(",", $user->profile->skills)
                                        @endphp
                                        <select class="skills_select2" name="skills[]" id="skills" multiple="multiple">
                                            <option value="php" {{ in_array('php', $skills) ? 'selected' : '' }}>PHP</option>
                                            <option value="css" {{ in_array('css', $skills) ? 'selected' : '' }}>CSS</option>
                                            <option value="html" {{ in_array('html"', $skills) ? 'selected' : '' }}>HTML</option>
                                        </select>
                                    </div>
                                    <div class="input desc-textarea">
                                        <label for="about"> نبذه عنك </label>
                                        <textarea name="about" id="about">{{ $user->profile->about }}</textarea>
                                    </div>

                                    <input type="submit" class="primary-butt" value="تحديث" />
                                </form>
                            </div>
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
