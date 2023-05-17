<div class="links-tabs mb-3 setting-tabs">
    <a href="{{ route('settings.index') }}" class="link-tab {{ $active == 'settings' ? 'active' : '' }}"
    ><i class="fas fa-user"></i>
        البيانات الشخصية
    </a>
    <a href="{{ route('settings.work') }}" class="link-tab {{ $active == 'work' ? 'active' : '' }}"
    ><i class="fas fa-briefcase"></i>
        بيانات العمل
    </a>
    <a href="#" class="link-tab"
    ><i class="fas fa-money-check-alt"></i>
        بيانات السحب
    </a>
    <a href="{{ route('settings.password') }}" class="link-tab {{ $active == 'change_password' ? 'active' : '' }}"
    ><i class="fas fa-key"></i>
        تغيير كلمة السر
    </a>
    <a href="{{ route('settings.phone') }}" class="link-tab {{ $active == 'phone' ? 'active' : '' }}"
    ><i class="fas fa-phone"></i>
        الهاتف المحمول
    </a>
</div>
