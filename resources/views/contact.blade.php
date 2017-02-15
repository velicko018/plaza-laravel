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
                    <h2 class="mg-sec-left-title">Send an E-mail</h2>
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
                    <p>Consulatu quietem ipsas obruamus. Controversia unam queo firmam videri, afranius derigatur sine sentit inliberali beatam scribendi splendide. Recusabo maximisque ferentur arbitraretur vellem oritur cupiditatibus copulatas.</p>
                    <ul class="mg-contact-info">
                        <li><i class="fa fa-map-marker"></i> Level 13, 2 Elizabeth St, Melbourne, Victoria 3000 Australia</li>
                        <li><i class="fa fa-phone"></i> +000-123-456-789 (Sale)</li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:#">example@example.com</a></li>
                    </ul>
                    <div id="mg-map" class="mg-map"></div>
                </div>
            </div>
        </div>
    </div>
@endsection