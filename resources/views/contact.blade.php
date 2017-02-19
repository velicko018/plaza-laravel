@extends('layouts.master')

@section('content')
    <div class="preloader"></div>
    <div class="mg-page-title parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact Us</h2>
                    <p>We are here to answer all your questions.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mg-page">
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <h2 class="mg-sec-left-title">Send us an E-mail</h2>
                    <form class="clearfix">
                        <div class="mg-contact-form-input">
                            <label for="full-name">Full Name</label>
                            <input type="text" class="form-control" id="full-name">
                        </div>
                        <div class="mg-contact-form-input">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="mg-contact-form-input">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject">
                        </div>
                        <div class="mg-contact-form-input">
                            <label for="subject">Message</label>
                            <textarea class="form-control" id="subject" rows="5"></textarea>
                        </div>
                        <input type="submit" class="btn btn-dark-main pull-right" value="Send">
                    </form>
                </div>
                <div class="col-md-7">
                    <h2 class="mg-sec-left-title">Office Address</h2>
                    <p>
                        You can send us an email or contact us at any time and we will respond to you as soon as we can.
                    </p>
                    <ul class="mg-contact-info">
                        <li><i class="fa fa-map-marker"></i> 768 Fifth Avenue, Manhattan, New York City 10019</li>
                        <li><i class="fa fa-phone"></i> +000-123-456-789 (Hotel reception)</li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:#">park-plaza-ny@example.com</a></li>
                    </ul>
                    <div id="mg-map" class="mg-map"></div>
                </div>
            </div>
        </div>
    </div>
@endsection