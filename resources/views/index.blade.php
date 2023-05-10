@extends('layouts.app')

@section('title', 'أنجز اعمالك ومشاريعك مع عشرات')

@section('content')
    <!-- start landing -->
    <section class="landing">
        <div
            id="carouselExampleControls"
            class="carousel slide"
            data-bs-ride="carousel"
        >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slide">
                        <div class="text">
                            <h1>مرحبا بك في عشرات</h1>
                            <p>
                                إنجز أعمالك عبر الإنترنت بسهولة وأمان على يد نخبة من أفضل
                                المستقلين في الوطن العربي
                            </p>
                            <a href="register.html" class="primary-butt"> سجل الان</a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('assets/images/land1.svg') }}" alt="land1" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide">
                        <div class="text">
                            <h1>الخدمات</h1>
                            <p>
                                مجموعة واسعة من الخدمات المصغرة الاحترافية لتنمية مشاريعك
                                وأعمالك بأمان بأسعار تبدأ من 5 دولارات
                            </p>
                            <a href="services.html" class="primary-butt"> تصفح الخدمات</a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('assets/images/land2.svg') }}" alt="land1" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide">
                        <div class="text">
                            <h1>المشاريع</h1>
                            <p>
                                إنقل أعمالك إلى المستوى التالي و وظف أفضل المستقلين لتنفيذ
                                مشاريعك
                            </p>
                            <a href="projects.html" class="primary-butt"> تصفح المشاريع</a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('assets/images/land3.svg') }}" alt="land1" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide">
                        <div class="text">
                            <h1>المسابقات</h1>
                            <p>
                                أطلق مسابقة لإنجاز أعمالك الإبداعية و قارن بين أفضل أعمال
                                المتسابقين المعدة خصيصاً لك ثم اختر الفائز
                            </p>
                            <a href="contests.html" class="primary-butt"> تصفح المسابقات</a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('assets/images/land4.svg') }}" alt="land1" />
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleControls"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- end landing -->
    <!-- start how-it-works -->
    <section class="how-it-works">
        <div class="container">
            <h2 class="headline">
                كيف يعمل؟
                <i class="fas fa-briefcase"></i>
            </h2>
            <ul class="tabs">
                <li class="active" data-window="services">
                    <button>الخدمات</button>
                </li>
                <li data-window="projects"><button>المشاريع</button></li>
                <li data-window="contests"><button>المسابقات</button></li>
            </ul>
            <ul class="windows">
                <li class="window services active">
                    <div class="box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="num">1</span>
                        <p>تصفح الخدمات</p>
                        <p>تصفح الخدمات وقارن بينها لتختار الأنسب لك</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-handshake"></i>
                        <span class="num">2</span>
                        <p>اطلب خدمة</p>
                        <p>أطلب الخدمة و تابع التنفيذ مع المستقل</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-check"></i>
                        <span class="num">3</span>
                        <p>استلم</p>
                        <p>استلم خدمتك بالجودة وفي الموعد المتفق عليه</p>
                    </div>
                </li>
                <li class="window projects">
                    <div class="box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="num">1</span>
                        <p>أَنْشِئْ مشروع</p>
                        <p>أضف مشروع توضح بها ما تريد تنفيذه</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-handshake"></i>
                        <span class="num">2</span>
                        <p>اطلب خدمة</p>
                        <p>أطلب الخدمة و تابع التنفيذ مع المستقل</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-check"></i>
                        <span class="num">3</span>
                        <p>استلم</p>
                        <p>استلم المشروع بالجودة وفي الموعد المتفق عليه</p>
                    </div>
                </li>
                <li class="window contests">
                    <div class="box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="num">1</span>
                        <p>إنشر مسابقة</p>
                        <p>أضف مسابقة موضح بها العمل المطلوب إنجازه</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-handshake"></i>
                        <span class="num">2</span>
                        <p>إستقبل & قارن</p>
                        <p>إستقبل المشاركات من المتسابقين</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-check"></i>
                        <span class="num">3</span>
                        <p>إختر الفائز</p>
                        <p>قارن بين الأعمال واختر الأفضل</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- end how-it-works -->
    <!-- start why -->
    <section class="why">
        <h2 class="headline">
            لماذا عشرات
            <i class="far fa-question-circle"></i>
        </h2>
        <p class="after-head">
            يعمل عشرات على توفير بيئة إحترافية وآمنة للتعامل بين رواد الأعمال
            والمستقلين وذلك من خلال:
        </p>
        <div class="container">
            <div class="box">
                <div class="text">
                    <p>صاحب الأعمال</p>
                    <ul>
                        <li><span>ضمان كامل لحقوقك ودعم فني متميز في خدمتك </span></li>
                        <li><span>لا رسوم إضافية , فقط ادفع ثمن مشترياتك </span></li>
                        <li>
                <span
                >استمتع بقسم المسابقات , القسم الحصري في الوطن العربي
                </span>
                        </li>
                        <li>
                            <span>وسائل دفع متنوعة ومؤمنة ومرنة تناسب كل الدول </span>
                        </li>
                    </ul>
                </div>
                <div class="img">
                    <img src="{{ asset('assets/images/why1.png') }}" alt="why" />
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="{{ asset('assets/images/why2.png') }}" alt="why" />
                </div>
                <div class="text">
                    <p>المستقل</p>
                    <ul>
                        <li><span>ضمان كامل لحقوقك ودعم فني متميز في خدمتك </span></li>
                        <li><span>فترة تعليق الرصيد قد تصل إلى يومين فقط </span></li>
                        <li><span>عمولة الموقع قد تصل إلى 10% فقط </span></li>
                        <li>
                <span
                >وسائل سحب أرباح متنوعة وميسرة (فيزا - ماستركارد - باي بال -
                  فودافون كاش - تحويل بنكي والعديد من الوسائل الأخري ....)
                </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end why -->
    <!-- start sections -->
    <section class="sections">
        <h2 class="headline">
            اقسامنا
            <i class="fas fa-th-large"></i>
        </h2>
        <p class="after-head">
            يتمتع عشرات بالعديد من الأقسام المختلفه (المسابقات / الخدمات المصغره /
            المشاريع ) التى تلبي مختلف إحتياجاتك لتطوير أعمالك
        </p>
        <div class="container">
            <ul class="tabs">
                <li class="active" data-window="services">
                    <button>الخدمات</button>
                </li>
                <li data-window="projects"><button>المشاريع</button></li>
                <li data-window="contests"><button>المسابقات</button></li>
            </ul>
            <ul class="windows">
                <li class="window services active">
                    <a href="" class="box">
                        <i class="fas fa-business-time"></i>
                        <span class="title"> الأعمال </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-code"></i>
                        <span class="title"> برمجيات </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-bullhorn"></i>
                        <span class="title"> تسويق </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-paint-brush"></i>
                        <span class="title"> تصميم </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-video"></i>
                        <span class="title"> فيديو </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-microphone-alt"></i>
                        <span class="title"> صوتيات </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-language"></i>
                        <span class="title"> كتابة و ترجمة </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span class="title"> تدريب و إستشارة </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-money-check-alt"></i>
                        <span class="title"> خدمات مالية </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-bars"></i>
                        <span class="title"> خدمات أخري </span>
                    </a>
                </li>
                <li class="window projects">
                    <a href="" class="box">
                        <i class="fas fa-suitcase"></i>
                        <span class="title"> أعمال و خدمات إستشارية و إدارية </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-code"></i>
                        <span class="title"> برمجة, تطوير المواقع و التطبيقات </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-photo-video"></i>
                        <span class="title"> تصميم, فيديو و صوتيات </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-bullhorn"></i>
                        <span class="title"> التسويق و المبيعات </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-newspaper"></i>
                        <span class="title"> كتابة, صناعة محتوي, ترجمة و لغات </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span class="title"> تدريب, تعليم و مساعدة عن بعد </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-bars"></i>
                        <span class="title"> أمور اخرى </span>
                    </a>
                </li>
                <li class="window contests">
                    <a href="" class="box">
                        <i class="fas fa-paint-brush"></i>
                        <span class="title"> تصميم </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-video"></i>
                        <span class="title"> فيديو </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-business-time"></i>
                        <span class="title"> الأعمال </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-globe"></i>
                        <span class="title"> إختيار أسماء </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-language"></i>
                        <span class="title"> كتابة و ترجمة </span>
                    </a>
                    <a href="" class="box">
                        <i class="fas fa-bars"></i>
                        <span class="title"> اخري </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- end sections -->
    <!-- start register section -->
    <section class="register">
        <div class="container lander">
            <div class="text">
                <h1>سجل معنا فى عشرات</h1>
                <p>
                    إستمتع بأقسام عشرات المختلفة (المسابقات / المشاريع / الخدمات المصغره
                    ) التى تقدم لك كافة إحتياجاتك لنمو مشاريعك مع نخبة من أفضل المستقلين
                    المرشحين من عشرات
                </p>
                <a href="register.html" class="primary-butt"> سجل الان</a>
            </div>
            <div class="image">
                <img src="{{ asset('assets/images/land1.svg') }}" alt="land1" />
            </div>
        </div>
    </section>
    <!-- end register section -->
    <!-- start questions -->
    <section class="questions">
        <h2 class="headline">
            الاسئلة الشائعة
            <i class="far fa-comments"></i>
        </h2>
        <div class="container">
            <details class="question">
                <summary>
                    ما هي منصة عشرات؟
                    <i class="fas fa-chevron-down"></i>
                </summary>
                <p>
                    منصة عشرات تمثل حلقة الوصل بين آلاف من المحترفين في شتى التخصصات من
                    مختلف الدول العربية و بين رواد الأعمال مهما كانت مجالات مشاريعهم و
                    شركاتهم الناشئة, حيث يمكن لهم توظيف المستقلين أصحاب المهارات عن بعد
                    لإنجاز مهام محددة بضمانة كاملة من عشرات من خلال بيئة إحترافية وبسيطة
                    وموثوقة.
                </p>
            </details>
            <details class="question">
                <summary>
                    كيف يمكن لأصحاب المهارات الاستفادة من عشرات؟
                    <i class="fas fa-chevron-down"></i>
                </summary>
                <p>
                    بالنسبة للمستقلين أصحاب المهارات فيمكنهم توظيف مهاراتهم واستثمارها
                    لتحويلها لمصدر دخل متميز وذلك من خلال عرض خدماتهم والمشاركة بعروضهم
                    على المشاريع والمسابقات التي تختص بمجال عملهم ومن ثم يتم اختيارهم من
                    قبل المشتريين لتنفيذ بعض تلك المهام المطلوبة ليحصلوا على الأجر
                    المادي المتفق عليه في مقابل ما بذلوه من جهد , مع العلم أن المنصة
                    تضمن لهم كامل حقوقهم.
                </p>
            </details>
            <details class="question">
                <summary>
                    كيف يضمن عشرات حقوقي كمشتري؟
                    <i class="fas fa-chevron-down"></i>
                </summary>
                <p>
                    في حال حدوث أي تقصير من البائع في تنفيذ الخدمة بشكلها الكامل يضمن
                    الموقع إعادة المال كاملاً للمشتري دون أي نقصان وذلك وفقا لشروط
                    الإستخدام، فقط كل ما عليك هو فتح تذكرة دعم فني.
                </p>
            </details>
            <details class="question">
                <summary>
                    كيف يضمن عشرات حقوقي كمستقل؟
                    <i class="fas fa-chevron-down"></i>
                </summary>
                <p>
                    قبل تنفيذك للعمل المطلوب فإن مبلغ ذلك العمل سواء كان خدمة أو مشروع
                    أو مسابقة يتم اقتطاعه من رصيد المشتري ليظل معلقاً في الموقع لحين
                    إنتهائك من تسليم العمل المطلوب حتى يتثنى لك تسلم أرباحك, وفي حال
                    تعرضك لأي ظلم أو محاولة للإستغلال يمكنك التواصل مع الدعم الفني ,
                    فنحن دوماً في خدمتك.
                </p>
            </details>
            <details class="question">
                <summary>
                    ما هي مستويات الباعة (المستقلين) في عشرات؟
                    <i class="fas fa-chevron-down"></i>
                </summary>
                <p>
                    بائع جديد : لم يحقق بعد أي مبيعات بائع مستوى 1 : حقق مبيعات تترواح
                    من 5 إلى 300 دولار من خلال 5 أعمال منفذة على الأقل وبحد أدني تقييم 3
                    نجوم بائع مستوى 2 : حقق مبيعات تترواح من 301 إلى 1000 دولار من خلال
                    20 عمل منفذ على الأقل وبحد أدني تقييم 4,25 نجمة بائع مستوى 3 : حقق
                    مبيعات أكثر من 1000 دولار من خلال 50 عمل منفذ على الأقل وبحد أدني
                    تقييم 4,5 نجمة بائع خبير : يتم إختياره يدويا من إدارة عشرات على أن
                    يجمع بين أخلاق وإحترافية ونشاط المستقل المتميز
                </p>
            </details>
        </div>
    </section>
    <!-- end questions -->
@endsection
