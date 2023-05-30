@extends('layouts.app')

@section('title', $service->title)

@section('content')
    <main class="service">
        <div class="container">
            <div class="service-header">
                <div class="title">
                    <h1>{{ $service->title }}</h1>
                    <div class="links">
                        <a href="{{ route('home') }}">الرئيسية</a>
                        <span>/</span>
                        <a href="{{ route('services.index') }}">الخدمات</a>
                        <span>/</span>
                        <a href="#">{{ $service->title }}</a>
                    </div>
                </div>
                <div class="icons">
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            </div>
            <div class="service-content">
                <div class="col-one">
                    <div class="slider">
                        <div
                            id="carouselExampleControls"
                            class="carousel slide"
                            data-bs-ride="carousel"
                        >
                            <div class="carousel-inner">
                                @foreach($service->media as $image)
                                <div class="carousel-item active">
                                    <img src="{{ asset($image->file_name) }}" class="d-block w-100" />
                                </div>
                                @endforeach
                            </div>
                            <button
                                class="carousel-control-prev"
                                type="button"
                                data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev"
                            >
                  <span
                      class="carousel-control-prev-icon"
                      aria-hidden="true"
                  ></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button
                                class="carousel-control-next"
                                type="button"
                                data-bs-target="#carouselExampleControls"
                                data-bs-slide="next"
                            >
                  <span
                      class="carousel-control-next-icon"
                      aria-hidden="true"
                  ></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <p class="description">{{ $service->description }}</p>
                    <div class="skills">
                        <p>مهارات البائع</p>
                        <div class="boxes">
                            @foreach(explode(",", $service->skills) as $skill)
                            <a href="#" class="skill">
{{--                                <i class="fa-solid fa-feather-pointed"></i>--}}
                                <span>{{ $skill }}</span>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="evaluation">
                        <div class="items">
                            <div class="item">
                                <span>ترشح للآخرين</span>
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="item">
                                <span>الإحترافية بالتعامل </span>
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="item">
                                <span>سرعة التواصل </span>
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="item">
                                <span> جودة العمل </span>
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="item">
                                <span> الخبرة بمجال العمل </span>
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="item">
                                <span> إحترام موعد التسليم </span>
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <div class="item">
                                <span> التعامل مرة اخرى </span>
                                <div class="stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="user">
                            <div class="image">
                                {!! getUserImage($service->user) !!}
                            </div>
                            <div class="text">
                                <a href="#">
                                    <span>{{ $service->user->full_name }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-two">
                    <p>بطاقة الخدمة</p>
                    <div class="items">
                        <div class="item">
                            <span>التقييمات</span>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <div class="item">
                            <span>سعر الخدمة </span>
                            <span><span>5.00</span> ريال</span>
                        </div>
                        <div class="item">
                            <span>مدة التسليم </span>
                            <span><span>1</span> أيام</span>
                        </div>
                        <div class="item">
                            <span>خدمات مباعة </span>
                            <span>1</span>
                        </div>
                        <div class="item">
                            <span>رابط الإحالة </span>
                            <a href="#">نسخ الرابط</a>
                        </div>
                    </div>
                    <button class="primary-butt">شراء الخدمة</button>
                </div>
            </div>
        </div>
    </main>
@endsection
