@extends('frontend.layouts.main')

@section('content')

    <!-- rts breadcrumba area start -->
    <div class="rts-bread-crumb-area ptb--150 ptb_sm--100 bg-breadcrumb bg_image" style="background-image: url({{ setting('contact_page_banner_image') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <h1 class="title">{{ setting('page_name_contact') }}</h1>
                        <div class="meta">
                            <a href="{{ route('home') }}" class="prev">{{ setting('page_name_home') }} /</a>
                            <a href="javascript:void(0)" class="next">{{ setting('page_name_contact') }}</a>
                        </div>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->
    <!-- Bread-Crumb style two End -->

    <!-- rts contact area start -->
    <div class="rts-contact-area-m rts-section-gap">
        <div class="container">
            <div class="row g-24">
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="{{ setting('contact_page_section_box_image_1') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="{{ setting('contact_page_section_box_icon_1') }}" alt="">
                            </div>
                            <div class="info">
                                <span>{{ setting('contact_page_section_box_title_1') }}</span>
                                <a href="tel:{{ setting('phone') }}">
                                    <h5>{{ setting('phone') }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="{{ setting('contact_page_section_box_image_2') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="{{ setting('contact_page_section_box_icon_2') }}" alt="">
                            </div>
                            <div class="info">
                                <span>{{ setting('contact_page_section_box_title_2') }}</span>
                                <a href="mailto:{{ setting('email') }}">
                                    <h5>{{ setting('email') }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="{{ setting('contact_page_section_box_image_3') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="{{ setting('contact_page_section_box_icon_3') }}" alt="">
                            </div>
                            <div class="info">
                                <span>{{ setting('contact_page_section_box_title_3') }}</span>
                                <a href="#">
                                    <h5>{{ setting('address') }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
            </div>
        </div>
    </div>
    <!-- rts contact area end -->


    <!-- contact form area strt -->
    <div class="rts-contact-page-form-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="mian-wrapper-form">
                    <div class="title-mid-wrapper-home-two" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                        <span class="pre">{{ setting('contact_page_form_sub_title') }}</span>
                        <h2 class="title">{{ setting('contact_page_form_title') }}</h2>
                    </div>
                    <div id="form-messages"></div>
                    <form class="contact-form-contact" action="{{ route('send.contact.form') }}" method="post">
                        @csrf
                        <div class="name-email">
                            <input type="text" name="name" @error('name') autofocus @enderror placeholder="{{ setting('contact_page_name_label') }}" value="{{ old('name') }}">
                            <input type="email" name="email" @error('email') autofocus @enderror placeholder="{{ setting('contact_page_email_label') }}" value="{{ old('email') }}">
                        </div>
                        <input type="text" name="subject" @error('subject') autofocus @enderror placeholder="{{ setting('contact_page_subject_label') }}" value="{{ old('subject') }}">
                        <textarea placeholder="{{ setting('contact_page_message_label') }}" @error('message') autofocus @enderror name="message">{{ old('message') }}</textarea>
                        <button type="submit" class="rts-btn btn-primary">{{ setting('contact_page_send_button') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form area end -->


@endsection
