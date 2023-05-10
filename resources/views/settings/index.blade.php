@extends('layouts.app')

@section('title', 'البيانات الشخصية')

@section('style')
    <style>
        .details-form .image img {
            width: 100px;
            height: 100px;
        }
    </style>
@endsection

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
                                @include('partials.settings.menu', ["active" => "settings"])
                                <form action="{{ route('settings.settings_update') }}" method="post" class="form details-form" enctype="multipart/form-data">
                                    @csrf

                                    @include('partials.messages.error')

                                    <div class="image">
                                        @if($user->image)
                                            <img src="{{ asset($user->image) }}" id="profile-image-holder" />
                                        @else
                                            <img src="{{ asset('assets/images/user.png') }}" id="profile-image-holder" />
                                        @endif
                                        <label for="file-upload"> تغيير الصورة</label>
                                        <input
                                            type="file"
                                            id="file-upload"
                                            name="image"
                                            onchange="changeProfileImage(this);"
                                        />
                                    </div>
                                    <div class="row-inputs">
                                        <div class="input required">
                                            <label for="firstname">الإسم الأول </label>
                                            <input type="text" name="first_name" id="firstname" value="{{ $user->first_name }}" />
                                        </div>
                                        <div class="input required">
                                            <label for="lastname"> الإسم الأخير </label>
                                            <input type="text" name="last_name" id="lastname" value="{{ $user->last_name }}" />
                                        </div>
                                    </div>
                                    <div class="input required input-full-width">
                                        <label for="username"> إسم المستخدم </label>
                                        <input
                                            type="text"
                                            name="username"
                                            id="username"
                                            value="{{ $user->username }}"
                                            disabled
                                        />
                                    </div>
                                    <div class="input required input-full-width">
                                        <label for="email"
                                        >البريد الإلكترونى
                                            <a
                                                style="color: var(--main-color)"
                                                href="#"
                                            >تغيير</a
                                            >
                                        </label>
                                        <input
                                            type="text"
                                            name="email"
                                            id="email"
                                            value="{{ $user->email }}"
                                            disabled
                                        />
                                    </div>
                                    <div class="row-inputs">
                                        <div class="input">
                                            <label for="birthday"> تاريخ الميلاد </label>
                                            <input type="date" name="birthday" id="birthday" value="{{ $user->profile->birthday }}" />
                                        </div>
                                        <div class="input">
                                            <label for="gender"> الجنس </label>
                                            <select name="gender" id="gender">
                                                <option value="" selected disabled>اختر</option>
                                                <option value="ذكر" {{ $user->profile->gender == 'ذكر' ? 'selected' : '' }}>ذكر</option>
                                                <option value="أنثى" {{ $user->profile->gender == 'أنثى' ? 'selected' : '' }}>أنثى</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input">
                                        <label for="country"> البلد </label>
                                        <select name="country_id" id="country">
                                            <option value="" selected="" disabled="">البلد</option>
                                            <option value="3">الجزائر</option>
                                            <option value="17">البحرين</option>
                                            <option value="48">جزر القمر</option>
                                            <option value="59">جيبوتي</option>
                                            <option value="64">مصر</option>
                                            <option value="104">العراق</option>
                                            <option value="111">الأردن</option>
                                            <option value="117">الكويت</option>
                                            <option value="121">لبنان</option>
                                            <option value="124">ليبيا</option>
                                            <option value="139">موريتانيا</option>
                                            <option value="148">المغرب</option>
                                            <option value="165">عمان</option>
                                            <option value="168">فلسطين</option>
                                            <option value="178">قطر</option>
                                            <option value="191">المملكة العربية السعودية</option>
                                            <option value="201">الصومال</option>
                                            <option value="207">السودان</option>
                                            <option value="213">سوريا</option>
                                            <option value="222">تونس</option>
                                            <option value="229">الإمارات العربية المتحدة</option>
                                            <option value="243">اليمن</option>
                                            <option value="1">أفغانستان</option>
                                            <option value="2">ألبانيا</option>
                                            <option value="4">ساموا الأمريكية</option>
                                            <option value="5">أندورا</option>
                                            <option value="6">أنغولا</option>
                                            <option value="7">أنغويلا</option>
                                            <option value="8">أنتاركتيكا</option>
                                            <option value="9">أنتيغوا وبربودا</option>
                                            <option value="10">الأرجنتين</option>
                                            <option value="11">أرمينيا</option>
                                            <option value="12">أروبا</option>
                                            <option value="13">أستراليا</option>
                                            <option value="14">النمسا</option>
                                            <option value="15">أذربيجان</option>
                                            <option value="16">Bahamas The</option>
                                            <option value="18">بنغلاديش</option>
                                            <option value="19">بربادوس</option>
                                            <option value="20">بيلاروس</option>
                                            <option value="21">بلجيكا</option>
                                            <option value="22">بليز</option>
                                            <option value="23">بنين</option>

                                            <option value="24">برمودا</option>
                                            <option value="25">بوتان</option>
                                            <option value="26">بوليفيا</option>
                                            <option value="27">البوسنة والهرسك</option>
                                            <option value="28">بوتسوانا</option>
                                            <option value="29">جزيرة بوفيه</option>
                                            <option value="30">البرازيل</option>
                                            <option value="31">
                                                الإقليم البريطاني في المحيط الهندي
                                            </option>
                                            <option value="32">Brunei</option>
                                            <option value="33">بلغاريا</option>
                                            <option value="34">بوركينا فاسو</option>
                                            <option value="35">بروندي</option>
                                            <option value="36">كمبوديا</option>
                                            <option value="37">الكاميرون</option>
                                            <option value="38">كندا</option>
                                            <option value="39">الرأس الأخضر</option>
                                            <option value="40">جزر كايمان</option>
                                            <option value="41">جمهورية أفريقيا الوسطى</option>
                                            <option value="42">تشاد</option>
                                            <option value="43">تشيلي</option>
                                            <option value="44">الصين</option>
                                            <option value="45">جزيرة كريسماس</option>
                                            <option value="46">جزر كوكوس (كيلينغ)</option>
                                            <option value="47">كولومبيا</option>
                                            <option value="49">Republic Of The Congo</option>

                                            <option value="50">
                                                Democratic Republic Of The Congo
                                            </option>
                                            <option value="51">جزر كوك</option>
                                            <option value="52">كوستا ريكا</option>
                                            <option value="53">Cote D'Ivoire (Ivory Coast)</option>
                                            <option value="54">Croatia (Hrvatska)</option>
                                            <option value="55">كوبا</option>
                                            <option value="56">قبرص</option>
                                            <option value="57">التشيك</option>
                                            <option value="58">الدانمارك</option>
                                            <option value="60">دومينيكا</option>
                                            <option value="61">جمهورية الدومينيكان</option>
                                            <option value="62">East Timor</option>
                                            <option value="63">الإكوادور</option>
                                            <option value="65">السلفادور</option>
                                            <option value="66">غينيا الاستوائية</option>
                                            <option value="67">إريتريا</option>
                                            <option value="68">إستونيا</option>
                                            <option value="69">إثيوبيا</option>
                                            <option value="70">
                                                External Territories of Australia
                                            </option>
                                            <option value="71">Falkland Islands</option>
                                            <option value="72">جزر فارو</option>
                                            <option value="73">Fiji Islands</option>
                                            <option value="74">فنلندا</option>
                                            <option value="75">فرنسا</option>
                                            <option value="76">غويانا الفرنسية</option>

                                            <option value="77">بولينيزيا الفرنسية</option>
                                            <option value="78">الأقاليم الجنوبية الفرنسية</option>
                                            <option value="79">الغابون</option>
                                            <option value="80">Gambia The</option>
                                            <option value="81">جورجيا</option>
                                            <option value="82">ألمانيا</option>
                                            <option value="83">غانا</option>
                                            <option value="84">جبل طارق</option>
                                            <option value="85">اليونان</option>
                                            <option value="86">غرينلاند</option>
                                            <option value="87">غرينادا</option>
                                            <option value="88">غوادلوب</option>
                                            <option value="89">غوام</option>
                                            <option value="90">غواتيمالا</option>
                                            <option value="91">Guernsey and Alderney</option>
                                            <option value="92">غينيا</option>
                                            <option value="93">غينيا بيساو</option>
                                            <option value="94">غيانا</option>
                                            <option value="95">هايتي</option>
                                            <option value="96">Heard and McDonald Islands</option>
                                            <option value="97">هندوراس</option>
                                            <option value="98">Hong Kong S.A.R.</option>
                                            <option value="99">هنغاريا</option>
                                            <option value="100">آيسلندا</option>
                                            <option value="101">الهند</option>
                                            <option value="102">إندونيسيا</option>
                                            <option value="103">Iran</option>
                                            <option value="105">إيرلندا</option>
                                            <option value="106">إسرائيل</option>
                                            <option value="107">إيطاليا</option>
                                            <option value="108">جامايكا</option>
                                            <option value="109">اليابان</option>
                                            <option value="110">جيرسي</option>
                                            <option value="112">كازاخستان</option>
                                            <option value="113">كينيا</option>
                                            <option value="114">كيريباتي</option>
                                            <option value="115">Korea North</option>
                                            <option value="116">Korea South</option>
                                            <option value="118">قيرغيزستان</option>
                                            <option value="119">Laos</option>
                                            <option value="120">ﻻتفيا</option>
                                            <option value="122">ليسوتو</option>
                                            <option value="123">ليبيريا</option>
                                            <option value="125">ليختنشتاين</option>
                                            <option value="126">ليتوانيا</option>
                                            <option value="127">لوكسمبورغ</option>
                                            <option value="128">Macau S.A.R.</option>
                                            <option value="129">مقدونيا الشمالية</option>
                                            <option value="130">مدغشقر</option>
                                            <option value="131">ملاوي</option>
                                            <option value="132">ماليزيا</option>
                                            <option value="133">جزر المالديف</option>
                                            <option value="134">مالي</option>
                                            <option value="135">مالطا</option>
                                            <option value="136">Man (Isle of)</option>
                                            <option value="137">جزر مارشال</option>
                                            <option value="138">جزر المارتينيك</option>
                                            <option value="140">موريشيوس</option>
                                            <option value="141">مايوت</option>
                                            <option value="142">المكسيك</option>
                                            <option value="143">Micronesia</option>
                                            <option value="144">مولدوفا</option>
                                            <option value="145">موناكو</option>
                                            <option value="146">منغوليا</option>
                                            <option value="147">مونتسرات</option>
                                            <option value="149">موزمبيق</option>
                                            <option value="150">ميانمار</option>
                                            <option value="151">ناميبيا</option>
                                            <option value="152">ناورو</option>
                                            <option value="153">نيبال</option>
                                            <option value="154">جزر الأنتيل الهولندية</option>
                                            <option value="155">Netherlands The</option>
                                            <option value="156">كاليدونيا الجديدة</option>
                                            <option value="157">نيوزلندا</option>
                                            <option value="158">نيكاراغوا</option>
                                            <option value="159">النجير</option>
                                            <option value="160">نيجيريا</option>
                                            <option value="161">نيوي</option>
                                            <option value="162">جزيرة نورفولك</option>
                                            <option value="163">جزر ماريانا الشمالية</option>
                                            <option value="164">النرويج</option>
                                            <option value="166">باكستان</option>
                                            <option value="167">بالاو</option>
                                            <option value="169">بنما</option>
                                            <option value="170">Papua new Guinea</option>
                                            <option value="171">باراغواي</option>
                                            <option value="172">بيرو</option>
                                            <option value="173">الفلبين</option>
                                            <option value="174">Pitcairn Island</option>
                                            <option value="175">بولندا</option>
                                            <option value="176">البرتغال</option>
                                            <option value="177">بورتوريكو</option>
                                            <option value="179">روينيون</option>
                                            <option value="180">رومانيا</option>
                                            <option value="181">Russia</option>
                                            <option value="182">رواندا</option>
                                            <option value="183">سانت هيليناؤ</option>
                                            <option value="184">سانت كيتس ونيفيس</option>
                                            <option value="185">سانت لوسيا</option>
                                            <option value="186">سانت بيار وميكلون</option>
                                            <option value="187">
                                                Saint Vincent And The Grenadines
                                            </option>
                                            <option value="188">ساموا</option>
                                            <option value="189">سان مارينو</option>
                                            <option value="190">ساو تومي وبرينسيبي</option>
                                            <option value="192">السنغال</option>
                                            <option value="193">صربيا</option>
                                            <option value="194">سيشل</option>
                                            <option value="195">سيراليون</option>
                                            <option value="196">سنغافورة</option>
                                            <option value="197">سلوفاكيا</option>
                                            <option value="198">سلوفينيا</option>
                                            <option value="199">
                                                Smaller Territories of the UK
                                            </option>
                                            <option value="200">جزر سليمان</option>
                                            <option value="202">جنوب أفريقيا</option>
                                            <option value="203">South Georgia</option>
                                            <option value="204">جنوب السودان</option>
                                            <option value="205">إسبانيا</option>
                                            <option value="206">سريلانكا</option>
                                            <option value="208">سورينام</option>
                                            <option value="209">
                                                Svalbard And Jan Mayen Islands
                                            </option>
                                            <option value="210">إسواتيني</option>
                                            <option value="211">السويد</option>
                                            <option value="212">سويسرا</option>
                                            <option value="214">تايوان</option>
                                            <option value="215">طاجيكستان</option>
                                            <option value="216">تنزانيا</option>

                                            <option value="217">تايلاند</option>
                                            <option value="218">توغو</option>
                                            <option value="219">توكيلو</option>
                                            <option value="220">تونغا</option>
                                            <option value="221">ترينيداد وتوباغو</option>
                                            <option value="223">تركيا</option>
                                            <option value="224">تركمانستان</option>
                                            <option value="225">جزر توركس وكايكوس</option>
                                            <option value="226">توفالو</option>
                                            <option value="227">أوغندا</option>
                                            <option value="228">أوكرانيا</option>
                                            <option value="230">المملكة المتحدة</option>
                                            <option value="231">الولايات المتحدة</option>
                                            <option value="232">
                                                جزر الولايات المتحدة النائية
                                            </option>
                                            <option value="233">أورغواي</option>
                                            <option value="234">أوزبكستان</option>
                                            <option value="235">فانواتو</option>
                                            <option value="236">
                                                Vatican City State (Holy See)
                                            </option>
                                            <option value="237">فنزويلا</option>
                                            <option value="238">Vietnam</option>
                                            <option value="239">Virgin Islands (British)</option>
                                            <option value="240">Virgin Islands (US)</option>
                                            <option value="241">Wallis And Futuna Islands</option>
                                            <option value="242">الصحراء الغربية</option>
                                            <option value="244">Yugoslavia</option>
                                            <option value="245">زامبيا</option>
                                            <option value="246">زيمبابوي</option>
                                        </select>
                                    </div>
                                    <div class="input">
                                        <label> الإشتراك فى القائمة البريدية </label>
                                        <div class="radios">
                                            <div class="subscribe-optn">
                                                <label for="subscribe-true">نعم</label>
                                                <input
                                                    type="radio"
                                                    name="subscribe"
                                                    id="subscribe-true"
                                                    checked
                                                />
                                            </div>
                                            <div class="subscribe-optn">
                                                <label for="subscribe-false">لا</label>
                                                <input
                                                    type="radio"
                                                    name="subscribe"
                                                    id="subscribe-false"
                                                />
                                            </div>
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

@push('js')
    <script>
        function changeProfileImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var img = document.getElementById("profile-image-holder");
                    img.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
