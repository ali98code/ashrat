@extends('layouts.app')

@section('title', 'الخدمات')

@section('content')
    <main class="services">
        <h1 class="headline">خدمات إبداعية لتعزيز وتطوير أعمالك</h1>
        <div class="container">
            <div class="boxes">
                @foreach($categories as $category)
                    <a href="{{ route('services.index', $category->slug) }}" class="box">
                        <i class="{{ $category->icon }}" aria-hidden="true"></i>
                        <span class="title">{{ $category->name }}</span>
                    </a>
                @endforeach
                <a href="" class="box">
                    <i class="fas fa-bars" aria-hidden="true"></i>
                    <span class="title"> خدمات أخري </span>
                </a>
            </div>
            <section class="design">
                <div class="header">
                    <p>خدمات تصميم</p>
                    <a class="secondary-butt" href="#">عرض المزيد</a>
                </div>
                <div class="services-box">
                    <a href="service.html" class="service-box">
                        <div class="image">
                            <img src="images/service.png" alt="" />
                        </div>
                        <div class="text">
                            <p class="title">تحريك شعار بأحترفية مقابل 10ريال</p>
                            <div class="price">
                                <span>سعر الخدمة</span>
                                <span>10ريال</span>
                            </div>
                        </div> </a
                    ><a href="service.html" class="service-box">
                        <div class="image">
                            <img src="images/service2.png" alt="" />
                        </div>
                        <div class="text">
                            <p class="title">تحريك شعار بأحترفية مقابل 10ريال</p>
                            <div class="price">
                                <span>سعر الخدمة</span>
                                <span>10ريال</span>
                            </div>
                        </div> </a
                    ><a href="service.html" class="service-box">
                        <div class="image">
                            <img src="images/service3.png" alt="" />
                        </div>
                        <div class="text">
                            <p class="title">تحريك شعار بأحترفية مقابل 10ريال</p>
                            <div class="price">
                                <span>سعر الخدمة</span>
                                <span>10ريال</span>
                            </div>
                        </div> </a
                    ><a href="service.html" class="service-box">
                        <div class="image">
                            <img src="images/service4.png" alt="" />
                        </div>
                        <div class="text">
                            <p class="title">تحريك شعار بأحترفية مقابل 10ريال</p>
                            <div class="price">
                                <span>سعر الخدمة</span>
                                <span>10ريال</span>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
            <section class="programming">
                <div class="header">
                    <p>خدمات برمجة وتطوير</p>
                    <a class="secondary-butt" href="#">عرض المزيد</a>
                </div>
                <div class="services-box">
                    <a href="service.html" class="service-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/service.png') }}" alt="" />
                        </div>
                        <div class="text">
                            <p class="title">تحريك شعار بأحترفية مقابل 10ريال</p>
                            <div class="price">
                                <span>سعر الخدمة</span>
                                <span>10ريال</span>
                            </div>
                        </div> </a
                    ><a href="service.html" class="service-box">
                        <div class="image">
                            <img src="{{ asset('assets/images/service.png') }}" alt="" />
                        </div>
                        <div class="text">
                            <p class="title">تحريك شعار بأحترفية مقابل 10ريال</p>
                            <div class="price">
                                <span>سعر الخدمة</span>
                                <span>10ريال</span>
                            </div>
                        </div> </a
                    ><a href="service.html" class="service-box">
                        <div class="image">
                            <img src="images/service3.png" alt="" />
                        </div>
                        <div class="text">
                            <p class="title">تحريك شعار بأحترفية مقابل 10ريال</p>
                            <div class="price">
                                <span>سعر الخدمة</span>
                                <span>10ريال</span>
                            </div>
                        </div> </a
                    ><a href="service.html" class="service-box">
                        <div class="image">
                            <img src="images/service4.png" alt="" />
                        </div>
                        <div class="text">
                            <p class="title">تحريك شعار بأحترفية مقابل 10ريال</p>
                            <div class="price">
                                <span>سعر الخدمة</span>
                                <span>10ريال</span>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
            <section class="writing">
                <div class="header">
                    <p>خدمات كتابة وتحرير</p>
                    <a class="secondary-butt" href="#">عرض المزيد</a>
                </div>
                <div class="services-box">
                    <a href="service.html" class="service-box">
                        <div class="image">
                            <img src="images/service.png" alt="" />
                        </div>
                        <div class="text">
                            <p class="title">تحريك شعار بأحترفية مقابل 10ريال</p>
                            <div class="price">
                                <span>سعر الخدمة</span>
                                <span>10ريال</span>
                            </div>
                        </div> </a
                    ><a href="service.html" class="service-box">
                        <div class="image">
                            <img src="images/service2.png" alt="" />
                        </div>
                        <div class="text">
                            <p class="title">تحريك شعار بأحترفية مقابل 10ريال</p>
                            <div class="price">
                                <span>سعر الخدمة</span>
                                <span>10ريال</span>
                            </div>
                        </div> </a
                    ><a href="service.html" class="service-box">
                        <div class="image">
                            <img src="images/service3.png" alt="" />
                        </div>
                        <div class="text">
                            <p class="title">تحريك شعار بأحترفية مقابل 10ريال</p>
                            <div class="price">
                                <span>سعر الخدمة</span>
                                <span>10ريال</span>
                            </div>
                        </div> </a
                    ><a href="service.html" class="service-box">
                        <div class="image">
                            <img src="images/service4.png" alt="" />
                        </div>
                        <div class="text">
                            <p class="title">تحريك شعار بأحترفية مقابل 10ريال</p>
                            <div class="price">
                                <span>سعر الخدمة</span>
                                <span>10ريال</span>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        </div>
    </main>
@endsection
