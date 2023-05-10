<header class="{{ auth()->check() ? 'logged' : '' }}">
    <div class="container">
        <div class="right">
            <i class="fa-solid fa-bars menu"></i>
            <a href="/" class="logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo"/>
            </a>
        </div>
        <div class="nav">
            <i class="fas fa-times close-nav exit"></i>
            <div class="search">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
                <input type="text" placeholder="ابحث عن.."/>
            </div>
            <ul class="links">
                <li>
                    <a href="{{ route('services.index') }}" class="link">
                        <i class="fas fa-shopping-cart"></i>
                        الخدمات
                    </a>
                </li>
                <li>
                    <a href="#" class="link">
                        <i class="fas fa-trophy"></i>
                        المسابقات
                    </a>
                </li>
                <li>
                    <a href="#" class="link">
                        <i class="fas fa-briefcase"></i>
                        المشاريع
                    </a>
                </li>
                <li>
                    <a href="#" class="link">
                        <i class="far fa-image"></i>
                        الأعمال
                    </a>
                </li>
                <li>
                    <a href="#" class="link">
                        <i class="fas fa-users"></i>
                        <span>المستقلين</span>
                    </a>
                </li>
            </ul>
        </div>
        @auth
            <div class="logged-div">
                <div class="dropdownn">
                    <button onclick="openDrop(this)" class="drop-butt">
                        <i class="far fa-envelope"></i>
                    </button>
                    <div class="dropdownn-content hide">
                        <p class="title">الرسائل</p>
                        <a class="primary-butt" href="#">تصفح جميع الرسائل</a>
                    </div>
                </div>
                <div class="dropdownn">
                    <button onclick="openDrop(this)" class="drop-butt">
                        <i class="far fa-bell"></i>
                    </button>
                    <div class="dropdownn-content hide">
                        <p class="title">التنبيهات</p>
                        <div class="notifications">
                            <div class="notification">
                                <div class="header">
                                    <a href="#" class="user black-user">
                                        <div class="image">
                                            @if(auth()->user()->image)
                                                <img src="{{ asset(auth()->user()->image) }}" alt="{{ auth()->user()->full_name }}"/>
                                            @else
                                                <img src="{{ asset('assets/images/user.png') }}" alt="{{ auth()->user()->full_name }}"/>
                                            @endif
                                        </div>
                                        <div class="text d-flex flex-column">
                                            <span class="text-dark">{{ auth()->user()->full_name }}</span>
                                            <span class="text-secondary small">تسويق سوشيال ميديا</span>
                                        </div>
                                    </a>
                                    <div class="left">
                                  <span class="date">
                                    <i class="far fa-clock"></i>
                                    منذ 3 أسابيع
                                  </span>
                                    </div>
                                </div>
                                <a href="#" class="content">
                                    سعداء بإنضمامك لنا في كفيل (منصة العمل الحر فى العالم
                                    العربي) , ودائما بخدمتك. يمكنك البدأ بالأسئلة الشائعة
                                    المساعدة و الدعم
                                </a>
                            </div>
                        </div>
                        <a class="primary-butt" href="#">تصفح جميع التنبيهات</a>
                    </div>
                </div>
                <div class="dropdownn">
                    <button onclick="openDrop(this)" class="drop-butt">
                        @if(auth()->user()->image)
                            <img class="rounded-circle" src="{{ asset(auth()->user()->image) }}" alt="{{ auth()->user()->full_name }}"/>
                        @else
                            <img class="rounded-circle" src="{{ asset('assets/images/user.png') }}" alt="{{ auth()->user()->full_name }}"/>
                        @endif
                    </button>
                    <div class="dropdownn-content hide dropdownn-user">
                        <a href="setting.html" class="user black-user">
                            <div class="image">
                                @if(auth()->user()->image)
                                    <img src="{{ asset(auth()->user()->image) }}" alt="{{ auth()->user()->full_name }}"/>
                                @else
                                    <img src="{{ asset('assets/images/user.png') }}" alt="{{ auth()->user()->full_name }}"/>
                                @endif
                            </div>
                            <div class="text d-flex flex-column">
                                <span class="text-dark">{{ auth()->user()->full_name }}</span>
                                <span class="text-secondary small">اعدادات الحساب </span>
                            </div>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('services.create') }}"><i class="far fa-plus"></i> إضافة خدمة</a>
                            </li>
                            <li>
                                <a href="{{ route('portfolios.create') }}"><i class="far fa-plus"></i> إضافة عمل</a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-credit-card"></i> الرصيد</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-cog"></i> لوحة التحكم</a>
                            </li>
                            <li>
                                <a href="{{ route('settings.index') }}"><i class="fas fa-user"></i> الملف الشخصي</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" onclick="document.getElementById('logout-form').submit()">
                                    <i class="fas fa-power-off"></i>
                                    تسجيل خروج
                                </a>
                                <form action="{{ route('logout') }}" method="post" class="d-none" id="logout-form">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @else
            <div class="login-register-butts">
                <a href="{{ route('login') }}" class="secondary-butt">
                    <span>دخول</span>
                    <i class="fas fa-sign-in-alt"></i>
                </a>
                <a href="{{ route('register') }}" class="primary-butt">
                    <span>حساب جديد</span>
                    <i class="fas fa-user-plus"></i>
                </a>
            </div>
        @endauth
    </div>
</header>
