@extends('frontend.layouts.skostudent')

@section('title', 'Privacy Policy')

@section('content')

<!-- Start Page Title Area -->
<div id="banner" class="page-title-area position-relative z-1" data-cue="slideInUp">
    <div class="container">
        <div class="page-title-content text-center">
            <h2>Privacy Policy</h2>
            <ul class="list-unstyled ps-0 mb-0">
                <li class="d-inline-block">
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="d-inline-block">
                    Privacy Policy
                </li>
            </ul>
        </div>
    </div>
    <div class="pages1">
        <img src="{{ asset('assets/skostudent/images/shapes/pages1.png') }}" alt="shape">
    </div>
    <div class="pages2">
        <img src="{{ asset('assets/skostudent/images/shapes/pages2.png') }}" alt="shape">
    </div>
    <div class="pages3">
        <img src="{{ asset('assets/skostudent/images/shapes/pages3.png') }}" alt="shape">
    </div>
    <div class="pages4">
        <img src="{{ asset('assets/skostudent/images/pages4.svg') }}" alt="shape">
    </div>
    <div class="pages5">
        <img src="{{ asset('assets/skostudent/images/pages5.svg') }}" alt="shape">
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
                <h3>Our website</h3>
                <p>Our website address is: <a href="{{ route('home') }}"> {{ url('/') }}</a></p>
            </div>
            <div class="title">
                <h3>Intellectual property</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget euismod erat, sit amet vulputate enim. Etiam enim tellus, maximus vel augue sed, pharetra hendrerit orci. Vivamus sed massa in nibh imperdiet mattis quis sed augue. Pellentesque erat metus, vestibulum nec nisl.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget euismod erat, sit amet vulputate enim. Etiam enim tellus.</p>
            </div>
            <div class="title">
                <h3>Skostudent Overview</h3>
                <p>We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, subscribe to the newsletter, fill out a form, and in connection with other activities, services, features or resources we make available on our Site. Users may be asked for, as appropriate, name, email address, mailing address, phone number, company name. We will collect personal <strong>identification</strong> information from Users only if they voluntarily consent such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related.</p>
            </div>
            <div class="title">
                <h3>General permission to use and access and use limitations</h3>
                <p>This site is provided by <strong>Skostudent</strong>. <strong>Skostudent</strong> collects information in several ways from different parts of this site.</p>
                <ul class="list-unstyled ps-0 mb-0 general ">
                    <li>
                        <strong>1.</strong>
                        Complimentary ground shipping within 1 to 7 business days
                    </li>
                    <li>
                        <strong>2.</strong>
                        In-store collection available within 1 to 7 business days
                    </li>
                    <li>
                        <strong>3.</strong>
                        Next-day and Express delivery options also available
                    </li>
                    <li>
                        <strong>4.</strong>
                        Purchases are delivered in an orange box tied with a Bolduc ribbon, with the exception of certain items
                    </li>
                    <li>
                        <strong>5.</strong>
                        See the delivery FAQs for details on shipping methods, costs and delivery times
                    </li>
                </ul>
            </div>
            <div class="title">
                <h3>Linking to this Site</h3>
                <p>Items returned within 14 days of their original shipment date in same as new condition will be eligible for a full refund or store credit. Refunds will be charged back form of payment used for purchase. Customer is responsible for shipping charges when making returns and shipping/handling fees of original purchase is non-refundable.</p>
            </div>
            <div class="title">
                <h3>Confidential information</h3>
                <p><strong>Skostudent</strong> accepts the following payment methods:</p>
                <ul class="list-unstyled ps-0 mb-0 confidential">
                    <li>Credit Card: Visa, MasterCard, Discover, American Express, JCB, Visa Electron. The total will be charged to your card when the order is shipped.</li>
                    <li><strong>Skostudent</strong> features a Fast Checkout option, allowing you to securely save your credit card details so that you don't have to re-enter them for future purchases.</li>
                    <li>PayPal: Shop easily online without having to enter your credit card details on the website.Your account will be charged once the order is completed. To register for a PayPal account, visit the website <a href="https://www.paypal.com">paypal.com.</a></li>
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- End Terms & Conditions Area -->

@endsection

