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
            @foreach($categories as $category)
            <section class="design">
                <div class="header">
                    <p>
                        خدمات
                        <span>{{ $category->name }}</span>
                    </p>
                    <a class="secondary-butt" href="{{ route('services.index', $category->slug) }}">عرض المزيد</a>
                </div>
                <div class="services-box">
                    @foreach($category->tree() as $service)
                    <a href="{{ route('service.show', $service->slug) }}" class="service-box">
                        <div class="image">
                            <img src="{{ asset($service->firstMedia->file_name) }}" alt="" />
                        </div>
                        <div class="text">
                            <p class="title">{{ $service->title }}</p>
                            <div class="price">
                                <span>سعر الخدمة</span>
                                <span>{{ $service->getPrice() }}</span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </section>
            @endforeach
        </div>
    </main>
@endsection
