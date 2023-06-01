@extends('website.layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                    <span>feel free to send us a message now!</span>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-phone"></i>
                        <h4>Phone</h4>
                        <p>Reach out and touch us - contact us today!</p><br>
                        <a href="tel:08040933570">08040933570</a>&nbsp;|&nbsp;<a href="tel:08040954188">08040954188</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <h4>Email</h4>
                        <p>Drop us a line - we're just an email away!</p><br>
                        <a href="mailto:info@lesgroup.in">info@lesgroup.in</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Location</h4>
                        <p>Chaitanya Dhriti Rudresh No 496, 6th Main, 8th Cross St, Vijaya Bank Layout, Bengaluru, Karnataka
                            560076</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
    @include('website.partials.request_callback')

    <div id="map">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.2339826390316!2d77.60520101482118!3d12.89267059090767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1505d1a00f59%3A0xbf35a536109bebf8!2sLeapFrog%20Engineering%20Services%20Pvt.%20Ltd!5e0!3m2!1sen!2sin!4v1682326233580!5m2!1sen!2sin"
            width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
@endsection
