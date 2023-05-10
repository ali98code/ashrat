<div class="job-box job-box-low-padding p-md-2 my-account">
    <div class="header">
        <p class="title">
            <i class="fas fa-user"></i>
            حسابي
        </p>
        <div class="icons">
            <a href="{{ route('settings.index') }}" class="setting"
            ><i class="fas fa-cog"></i
                ></a>
        </div>
    </div>
    <div class="body boxes">
        <div class="user-box box">
            <a href="#" class="image">
                @if($user->image)
                    <img src="{{ asset($user->image) }}" id="profile-image-holder" />
                @else
                    <img src="{{ asset('assets/images/user.png') }}" id="profile-image-holder" />
                @endif
                <svg
                    width="82"
                    height="82"
                    aria-describedby="tooltip169557"
                >
                    <circle
                        r="39"
                        cx="41"
                        cy="41"
                        style="
                            stroke-dashoffset: calc(250 - (250 * 89) / 100);
                          "
                    ></circle>
                </svg>
            </a>
            <p class="name">{{ auth()->user()->full_name }}</p>
            <div class="stars">
                <i class="fas fa-star active" aria-hidden="true"></i>
                <i class="fas fa-star active" aria-hidden="true"></i>
                <i class="fas fa-star active" aria-hidden="true"></i>
                <i class="fas fa-star active" aria-hidden="true"></i>
                <i class="fas fa-star active" aria-hidden="true"></i>
                <span>(5.0)</span>
            </div>
            <p class="info-content">
                <i class="far fa-user" aria-hidden="true"></i>
                <span class="">برمجة, تطوير المواقع و التطبيقات</span>
            </p>
            <div class="medals">
                <i class="fas fa-medal user-badge"></i>
                <i class="fas fa-door-open user-badge"></i>
            </div>
            <div class="brief">
                مصمم جرافيك اعمل في مجال التصميم الدعاية والاعلان و
                الشعارت و اعلانات السوشيل ميديا وتصميم اغلفة الكتب و
                الروايات
            </div>
        </div>
    </div>
</div>
<div class="dashboard-links">
    @php
        $page = Route::currentRouteName();
    @endphp
    <a href="dashboard.html" class="dashboard-link"
    ><i class="fas fa-home"></i> الرئيسية</a
    >
    <a href="transaction.html" class="dashboard-link"
    ><i class="fas fa-money-bill-alt"></i> الرصيد</a
    >
    <a href="setting.html" class="dashboard-link {{ $page == 'settings.index' || $page == 'settings.work' ? 'active' : '' }}"
    ><i class="fas fa-cog"></i> الإعدادات</a
    >
    <a href="my-services.html" class="dashboard-link"
    ><i class="fas fa-store-alt"></i> خدماتي</a
    >
    <a href="my-contests.html" class="dashboard-link"
    ><i class="fas fa-trophy"></i> مسابقاتي</a
    >
    <a href="my-projects.html" class="dashboard-link"
    ><i class="fas fa-suitcase"></i> مشاريعي</a
    >
    <a href="my-portfolios.html" class="dashboard-link"
    ><i class="fas fa-images"></i> أعمالى</a
    >
    <a href="chat.html" class="dashboard-link"
    ><i class="fas fa-comment-dots"></i> محادثاتي</a
    >
    <a href="questions.html" class="dashboard-link"
    ><i class="fas fa-comments"></i> الملتقي</a
    >
    <a href="list-my-favorites.html" class="dashboard-link"
    ><i class="fas fa-heart"></i> المفضلة</a
    >
    <a href="referral.html" class="dashboard-link"
    ><i class="fas fa-bullhorn"></i> تسويق</a
    >
    <a href="points.html" class="dashboard-link"
    ><i class="fas fa-circle"></i> النقاط</a
    >
    <a href="userVerification.html" class="dashboard-link"
    ><i class="fas fa-id-card-alt"></i> التوثيق</a
    >
    <a href="preference.html" class="dashboard-link"
    ><i class="fas fa-bell"></i> التنبيهات</a
    >
    <a href="supportTicket.html" class="dashboard-link"
    ><i class="fas fa-ticket-alt"></i> التذاكر</a
    >
</div>
