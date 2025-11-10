@extends('frontend.layouts.skostudent')

@section('title', setting('page_name_contact') !== 'page_name_contact' ? setting('page_name_contact') : 'Əlaqə')

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp" @if(setting('contact_page_banner_image')) style="background-image: url('{{ setting('contact_page_banner_image') }}'); background-size: cover; background-position: center;" @endif>
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Bizimlə Əlaqə</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Ana səhifə
                    </a>
                </li>
                <li class="d-inline-block">
                    Əlaqə
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

<!-- Start Contact Area -->
<div class="contact-area pt-136 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-contact-content">
                    <div class="section-title">
                        <span class="d-inline-block sub-title">Bizimlə Əlaqə</span>
                        <h2>
                            Əlaqə 
                            <span class="position-relative">
                                Saxla
                                <img src="{{ asset('assets/images/title-shape.svg') }}" alt="shape">
                            </span>
                        </h2>
                    </div>
                    @if(setting('email') && setting('email') !== 'email')
                    <div class="contact-list d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/inbox-icon.svg') }}" alt="icon">
                        </div>
                        <div class="content">
                            <h3>{{ setting('say_hello_label') !== 'say_hello_label' ? setting('say_hello_label') : 'E-poçt' }} :</h3>
                            <a href="mailto:{{ setting('email') }}">
                                {{ setting('email') }}
                            </a>
                        </div>
                    </div>
                    @endif
                    @if(setting('phone') && setting('phone') !== 'phone')
                    <div class="contact-list d-flex align-items-center">
                        <div class="icon bg-2">
                            <img src="{{ asset('assets/images/message-icon.svg') }}" alt="icon">
                        </div>
                        <div class="content">
                            <h3>Zəng Et :</h3>
                            <a href="tel:{{ setting('phone') }}">
                                {{ setting('phone') }}
                            </a>
                        </div>
                    </div>
                    @endif
                    @if(setting('address') && setting('address') !== 'address')
                    <div class="contact-list d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/user-icon.svg') }}" alt="icon">
                        </div>
                        <div class="content">
                            <h3>{{ setting('address_label') !== 'address_label' ? setting('address_label') : 'Ofis' }} :</h3>
                            <span>{{ setting('address') }}</span>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-8">
                <div class="single-contact-form style-2">
                    @if(setting('contact_page_form_sub_title') && setting('contact_page_form_sub_title') !== 'contact_page_form_sub_title')
                    <div class="section-title mb-4">
                        <span class="d-inline-block sub-title">{{ setting('contact_page_form_sub_title') }}</span>
                        @if(setting('contact_page_form_title') && setting('contact_page_form_title') !== 'contact_page_form_title')
                        <h2>{{ setting('contact_page_form_title') }}</h2>
                        @endif
                    </div>
                    @endif
                    <form method="POST" action="{{ route('send.contact.form') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="{{ setting('contact_page_name_label') !== 'contact_page_name_label' ? setting('contact_page_name_label') . '*' : 'Ad*' }}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="{{ setting('contact_page_email_label') !== 'contact_page_email_label' ? setting('contact_page_email_label') . '*' : 'E-poçt*' }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="{{ setting('contact_page_subject_label') !== 'contact_page_subject_label' ? setting('contact_page_subject_label') : 'Mövzu' }}">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control textarea" placeholder="{{ setting('contact_page_message_label') !== 'contact_page_message_label' ? setting('contact_page_message_label') . '*' : 'Mesajınız*' }}" required></textarea>
                        </div>
                        <button type="submit" class="default-btn2 style-3 border-0">{{ setting('contact_page_send_button') !== 'contact_page_send_button' ? setting('contact_page_send_button') : 'Mesaj Göndər' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

<!-- Start Contact Map -->
<div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24196.22093656893!2d-111.91936604612816!3d40.70640020197386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87528ace2b0246f5%3A0x492b0c437e9cceb8!2sSouth%20Salt%20Lake%2C%20UT%2C%20USA!5e0!3m2!1sen!2sbd!4v1724093902757!5m2!1sen!2sbd"></iframe>
</div>
<!-- End Contact Map -->

@endsection
