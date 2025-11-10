@extends('frontend.layouts.skostudent')

@section('title', 'Əlaqə')

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp">
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
                    <div class="contact-list d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/inbox-icon.svg') }}" alt="icon">
                        </div>
                        <div class="content">
                            <h3>E-poçt :</h3>
                            <a href="mailto:{{ setting('email') !== 'email' ? setting('email') : 'info@skostudent.az' }}">
                                {{ setting('email') !== 'email' ? setting('email') : 'info@skostudent.az' }}
                            </a>
                        </div>
                    </div>
                    <div class="contact-list d-flex align-items-center">
                        <div class="icon bg-2">
                            <img src="{{ asset('assets/images/message-icon.svg') }}" alt="icon">
                        </div>
                        <div class="content">
                            <h3>Zəng Et :</h3>
                            <a href="tel:{{ setting('phone') !== 'phone' ? setting('phone') : '+994123456789' }}">
                                {{ setting('phone') !== 'phone' ? setting('phone') : '+994123456789' }}
                            </a>
                        </div>
                    </div>
                    <div class="contact-list d-flex align-items-center">
                        <div class="icon">
                            <img src="{{ asset('assets/images/user-icon.svg') }}" alt="icon">
                        </div>
                        <div class="content">
                            <h3>Ofis :</h3>
                            <span>{{ setting('address') !== 'address' ? setting('address') : 'Bakı, Azərbaycan' }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="single-contact-form style-2">
                    <form method="POST" action="{{ route('send.contact.form') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Ad*" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="E-poçt*" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Mövzu">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control textarea" placeholder="Mesajınız*" required></textarea>
                        </div>
                        <button type="submit" class="default-btn2 style-3 border-0">Mesaj Göndər</button>
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
