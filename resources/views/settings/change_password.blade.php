@extends('layouts.app')

@section('title', 'كلمة المرور')


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
                                @include('partials.settings.menu', ["active" => "change_password"])
                                <form action="{{ route('settings.change_password') }}" method="post" class="form details-form">
                                    @csrf
                                    @include('partials.messages.error')
                                    <div class="row-inputs">
                                        <div class="input required">
                                            <label for="old_password"> كلمة السر القديمة </label>
                                            <input type="password" name="old_password" id="old_password" />
                                        </div>
                                        <div class="input required">
                                            <label for="password"> كلمة السر الجديدة </label>
                                            <input type="password" name="password" id="password" />
                                        </div>
                                        <div class="input required">
                                            <label for="password_confirmation">
                                                تأكيد كلمة السر الجديدة
                                            </label>
                                            <input
                                                type="password"
                                                name="password_confirmation"
                                                id="password_confirmation"
                                            />
                                        </div>
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
