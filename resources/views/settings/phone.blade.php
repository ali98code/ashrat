@extends('layouts.app')

@section('title', 'رقم الهاتف')

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
                                @include('partials.settings.menu', ["active" => "phone"])
                                <form action="{{ route('settings.phone') }}" method="post" class="form details-form">
                                    @csrf

                                    @include('partials.messages.error')

                                    <div class="input required input-full-width">
                                        <label for="phone"> أرقام هاتفك </label>
                                        <input
                                            type="number"
                                            name="phone"
                                            id="phone"
                                            value="{{ $user->phone }}"
                                        />
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
