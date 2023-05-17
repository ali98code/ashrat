@extends('layouts.app')

@section('title', 'الخدمات')

@section('content')
    <main class="freelancers">
        <div class="container grid">
            <div class="side-bar">
                <i class="fas fa-times close-side-bar exit" aria-hidden="true"></i>
                <div class="search">
                    <input type="text" placeholder="ابحث عن" />
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="menu section-filter">
                    <p>
                        <a
                            data-bs-toggle="collapse"
                            href="#collapseExample"
                            role="button"
                            aria-expanded="false"
                            aria-controls="collapseExample"
                        >
                            الاقسام <i class="fa-solid fa-chevron-down"></i>
                        </a>
                    </p>
                    <div class="collapse show" id="collapseExample">
                        <div class="collapse-items">
                            <a href="#"
                            ><i class="fas fa-suitcase"></i> أعمال و خدمات إستشارية
                                وإدارية</a
                            >
                            <a href="#"
                            ><i class="fas fa-code"></i> برمجة, تطوير المواقع و
                                التطبيقات</a
                            >
                            <a href="#"
                            ><i class="fas fa-photo-video"></i> تصميم, فيديو و صوتيات</a
                            >
                            <a href="#"
                            ><i class="fas fa-bullhorn"></i> التسويق و المبيعات</a
                            >
                            <a href="#"
                            ><i class="fas fa-newspaper"></i> كتابة, صناعة محتوي, ترجمة و
                                لغات</a
                            >
                            <a href="#"
                            ><i class="fas fa-chalkboard-teacher"></i> تدريب, تعليم و
                                مساعدة عن بعد</a
                            >
                            <a href="#"><i class="fas fa-bars"></i> اخري</a>
                        </div>
                    </div>
                </div>
                <div class="menu skills-filter">
                    <p>
                        <a
                            data-bs-toggle="collapse"
                            href="#collapseExample1"
                            role="button"
                            aria-expanded="false"
                            aria-controls="collapseExample"
                        >
                            المهارات <i class="fa-solid fa-chevron-down"></i>
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample1">
                        <div class="collapse-items">
                            <select name="skill" id="">
                                <option value="email">ادارة الايميل الالكتروني</option>
                                <option value="english">الانجليزية</option>
                                <option value="photoshop">تصميم فوتوشوب</option>
                                <option value="Microsoft Word">Microsoft Word</option>
                                <option value="logo-design">تصميم الشعارات</option>
                                <option value="graphic-design">تصميم الجرافيك</option>
                                <option value="article-rewriting">
                                    إعادة كتابة المقالات
                                </option>
                                <option value="creative-design">التصميم الإبداعي</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="menu other-filters">
                    <p>
                        <a
                            data-bs-toggle="collapse"
                            href="#collapseExample2"
                            role="button"
                            aria-expanded="false"
                            aria-controls="collapseExample"
                        >
                            مرشحات أخري <i class="fa-solid fa-chevron-down"></i>
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample2">
                        <div class="collapse-items">
                            <div class="filter">
                                <input type="checkbox" id="online" />
                                <label for="online"
                                ><span
                                        class="fas fa-circle"
                                        style="color: #1dbf73; font-size: 14px"
                                    ></span
                                    >اونلاين</label
                                >
                            </div>
                            <div class="filter">
                                <input type="checkbox" id="verified" />
                                <label for="verified"
                                ><span
                                        class="fas fa-shield-alt"
                                        style="color: #1dbf73"
                                    ></span
                                    >موثق</label
                                >
                            </div>
                            <div class="filter">
                                <input type="checkbox" id="discount" />
                                <label for="discount">أضاف عروض على مشاريعي</label>
                            </div>
                            <div class="filter">
                                <input type="checkbox" id="hired-before" />
                                <label for="hired-before">وظفتهم سابقاً</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu rating">
                    <p>
                        <a
                            data-bs-toggle="collapse"
                            href="#collapseExample3"
                            role="button"
                            aria-expanded="false"
                            aria-controls="collapseExample"
                        >
                            التقييم <i class="fa-solid fa-chevron-down"></i>
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample3">
                        <div class="collapse-items">
                <span>
                  <input type="checkbox" class="d-none" />
                  <span class="fas fa-star star-rating" value="1"></span>
                  <span class="fas fa-star star-rating" value="2"></span>
                  <span class="fas fa-star star-rating" value="3"></span>
                  <span class="fas fa-star star-rating" value="4"></span>
                  <span class="fas fa-star star-rating" value="5"></span>
                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contents">
                <div class="header">
                    <div class="title">
                        <i class="fas fa-shopping-cart"></i>
                        الخدمات
                    </div>
                    <div class="phone-header">
                        <button class="open-side-bar">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                    </div>
                </div>
                <div class="services-box">
                    @foreach($services as $service)
                        <a href="#" class="service-box">
                            <div class="image">
                                <img src="{{ asset('assets/images/service.png') }}" alt="" />
                            </div>
                            <div class="text">
                                <p class="title">{{ $service->title }}</p>
                                <div class="price">
                                    <span>سعر الخدمة</span>
                                    <span>10ريال</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
