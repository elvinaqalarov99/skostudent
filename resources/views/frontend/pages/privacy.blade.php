@extends('frontend.layouts.main')

@section('title', 'Məxfilik Siyasəti')

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp">
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Məxfilik Siyasəti</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Ana səhifə
                    </a>
                </li>
                <li class="d-inline-block">
                    Məxfilik Siyasəti
                </li>
            </ul>
        </div>
    </div>
    <div class="pages4">
        <img src="{{ asset('assets/images/pages4.svg') }}" alt="shape">
    </div>
    <div class="pages5">
        <img src="{{ asset('assets/images/pages5.svg') }}" alt="shape">
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Terms & Conditions Area -->
<div class="terms-conditions-area pt-136 pb-110">
    <div class="container"> 
        <div class="terms-conditions-content">
            @if($privacy)
                @if(localized($privacy->title))
                <div class="title">
                    <h3>{{ localized($privacy->title) }}</h3>
                </div>
                @endif
                @if(localized($privacy->description))
                <div class="title">
                    <div class="editor-contents">
                        {!! localized($privacy->description) !!}
                    </div>
                </div>
                @endif
            @else
            <div class="title">
                <h3>Bizim veb-sayt</h3>
                <p>Bizim veb-sayt ünvanı: <a href="{{ route('home') }}"> {{ url('/') }}</a></p>
            </div>
            <div class="title">
                <h3>İntellektual mülkiyyət</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget euismod erat, sit amet vulputate enim. Etiam enim tellus, maximus vel augue sed, pharetra hendrerit orci. Vivamus sed massa in nibh imperdiet mattis quis sed augue. Pellentesque erat metus, vestibulum nec nisl.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget euismod erat, sit amet vulputate enim. Etiam enim tellus.</p>
            </div>
            <div class="title">
                <h3>Skostudent Overview</h3>
                <p>We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, subscribe to the newsletter, fill out a form, and in connection with other activities, services, features or resources we make available on our Site. Users may be asked for, as appropriate, name, email address, mailing address, phone number, company name. We will collect personal <strong>identification</strong> information from Users only if they voluntarily consent such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related.</p>
            </div>
            <div class="title">
                <h3>Ümumi icazə və istifadə məhdudiyyətləri</h3>
                <p>Bu sayt <strong>Skostudent</strong> tərəfindən təmin olunur. <strong>Skostudent</strong> bu saytın müxtəlif hissələrindən məlumat toplayır.</p>
                <ul class="list-unstyled ps-0 mb-0 general ">
                    <li>
                        <strong>1.</strong>
                        1-7 iş günü ərzində pulsuz yer çatdırılması
                    </li>
                    <li>
                        <strong>2.</strong>
                        1-7 iş günü ərzində mağazada toplama mövcuddur
                    </li>
                    <li>
                        <strong>3.</strong>
                        Növbəti gün və Ekspres çatdırılma seçimləri də mövcuddur
                    </li>
                    <li>
                        <strong>4.</strong>
                        Alışlar müəyyən məhsullar istisna olmaqla, Bolduc lentlə bağlanmış narıncı qutuda çatdırılır
                    </li>
                    <li>
                        <strong>5.</strong>
                        Çatdırılma metodları, xərclər və çatdırılma vaxtları haqqında təfərrüatlar üçün çatdırılma FAQ-larına baxın
                    </li>
                </ul>
            </div>
            <div class="title">
                <h3>Bu sayta keçid</h3>
                <p>Orijinal göndərmə tarixindən 14 gün ərzində yeni vəziyyətdə qaytarılan məhsullar tam geri ödəniş və ya mağaza krediti üçün uyğun olacaq. Geri ödənişlər alış üçün istifadə olunan ödəniş formasına qaytarılacaq. Müştəri qaytarma zamanı çatdırılma xərcləri üçün məsuliyyət daşıyır və orijinal alışın çatdırılma/emal haqqı geri qaytarılmır.</p>
            </div>
            <div class="title">
                <h3>Məxfi məlumat</h3>
                <p><strong>Skostudent</strong> aşağıdakı ödəniş metodlarını qəbul edir:</p>
                <ul class="list-unstyled ps-0 mb-0 confidential">
                    <li>Kredit Kartı: Visa, MasterCard, Discover, American Express, JCB, Visa Electron. Ümumi məbləğ sifariş göndərildikdə kartınıza ödəniləcək.</li>
                    <li><strong>Skostudent</strong> Sürətli Ödəniş seçimini təklif edir, bu da kredit kartı məlumatlarınızı təhlükəsiz şəkildə saxlamağa imkan verir ki, gələcək alışlar üçün onları yenidən daxil etməyə ehtiyac olmasın.</li>
                    <li>PayPal: Veb-saytda kredit kartı məlumatlarınızı daxil etmədən asanlıqla onlayn alış-veriş edin. Sifariş tamamlandıqda hesabınız ödəniləcək. PayPal hesabı üçün qeydiyyatdan keçmək üçün <a href="https://www.paypal.com">paypal.com</a> veb-saytına daxil olun.</li>
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- End Terms & Conditions Area -->

@endsection

