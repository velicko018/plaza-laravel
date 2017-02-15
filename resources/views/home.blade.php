@extends('layouts.master')

@section('content')
    <div id="mega-slider" class="carousel slide " data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#mega-slider" data-slide-to="0" class="active"></li>
            <li data-target="#mega-slider" data-slide-to="1"></li>
            <li data-target="#mega-slider" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{!! asset('images/slide-4.png') !!}" alt="...">
                <div class="carousel-caption">
                    <img src="{!! asset('images/stars.png') !!}" alt="">
                    <h2>Welcome to Park Plaza Hotel</h2>
                    <p>The most exclusive hotel in New York</p>
                </div>
            </div>
            <div class="item">
                <img src="{!! asset('images/slide-2.png') !!}" alt="...">
                <div class="carousel-caption">
                    <img src="{!! asset('images/stars.png') !!}" alt="">
                    <h2>Feel Like Your Home</h2>
                    <p>We are at Your service.</p>
                </div>
            </div>
            <div class="item">
                <img src="{!! asset('images/slide-3.png') !!}" alt="...">
                <div class="carousel-caption">
                    <img src="{!! asset('images/stars.png') !!}" alt="">
                    <h2>Perfect Place for Dining</h2>
                    <p>Best restorants.</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#mega-slider" role="button" data-slide="prev">
        </a>
        <a class="right carousel-control" href="#mega-slider" role="button" data-slide="next">
        </a>

    </div>

    <!-- Booking form -->
    <div class="mg-book-now">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="mg-bn-title">Search Rooms <span class="mg-bn-big">For rates & availability</span></h2>
                </div>
                <div class="col-md-9">
                    <div class="mg-bn-forms">
                        <form>
                            <div class="row">
                                <div class="col-md-3 col-xs-6">
                                    <div class="input-group date mg-check-in">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Check In">
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6">
                                    <div class="input-group date mg-check-out">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Check Out">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <select class="cs-select cs-skin-elastic">
                                                <option value="" disabled selected>Adult</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-6">
                                            <select class="cs-select cs-skin-elastic">
                                                <option value="" disabled selected>Child</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-main btn-block">Check Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Best rooms -->
    <div class="mg-best-rooms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mg-sec-title">
                        <h2>Our Best Rooms</h2>
                        <p>These best rooms chosen by our customers</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <figure class="mg-room">
                                <img src="{!! asset('images/room-1.png') !!}" alt="img11" class="img-responsive">
                                <figcaption>
                                    <h2>Super Deluxe</h2>
                                    <div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
                                    <div class="mg-room-price">$249<sup>.99/Night</sup></div>
                                    <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                    <a href="#" class="btn btn-link">View Details <i class="fa fa-angle-double-right"></i></a>
                                    <a href="#" class="btn btn-main">Book</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4">
                            <figure class="mg-room">
                                <img src="{!! asset('images/room-2.png') !!}" alt="img11" class="img-responsive">
                                <figcaption>
                                    <h2>Super Deluxe</h2>
                                    <div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
                                    <div class="mg-room-price">$249<sup>.99/Night</sup></div>
                                    <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                    <a href="#" class="btn btn-link">View Details <i class="fa fa-angle-double-right"></i></a>
                                    <a href="#" class="btn btn-main">Book</a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-sm-4">
                            <figure class="mg-room">
                                <img src="{!! asset('images/room-3.png') !!}" alt="img11" class="img-responsive">
                                <figcaption>
                                    <h2>Super Deluxe</h2>
                                    <div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
                                    <div class="mg-room-price">$249<sup>.99/Night</sup></div>
                                    <p>adversantur probatum iudicante indicaverunt repugnantibus.</p>
                                    <a href="#" class="btn btn-link">View Details <i class="fa fa-angle-double-right"></i></a>
                                    <a href="#" class="btn btn-main">Book</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="mg-about parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2 class="mg-sec-left-title">About Plaza Hotel</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Aliqua venandi mutat plerisque nostrum vos, geometria intellegimus percurri mediocritatem aeque suppetet explicatis,
                        praeclaram ambigua cogitavisse vituperatoribus dicent signiferumque alios improbe, reliquisti rudem,
                        consedit pendet circumcisaque amorem patria magnopere inmortalibus dolere. Didicisset labore vitium referenda labor
                        peccant integre turpe est tantopere, eius defuturum sua dolorum crudelis exercitumque, nobis,
                        videntur doloribus patre poetarum omnisque cognitionem primum, atomos certamen possent, adversantur
                        probatum iudicante indicaverunt repugnantibus, operis aequi aequitate clarorum occultarum multa diis sine inter.</p>
                </div>
                <div class="col-md-5">
                    <div class="video-responsive">
                        <img src="{!! asset('images/park-plaza2.jpg') !!}" width="100%" height="auto" style="background: center;"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class="mg-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mg-sec-title">
                        <h2>Hotel facilties</h2>
                        <p>These best rooms chosen by our customers</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mg-feature">
                                <div class="mg-feature-icon-title">
                                    <i class="glyphicon glyphicon-time"></i>
                                    <h3>24-hour reception</h3>
                                </div>
                                <p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mg-feature">
                                <div class="mg-feature-icon-title">
                                    <i class="fa fa-cogs"></i>
                                    <h3>Room service</h3>
                                </div>
                                <p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mg-feature">
                                <div class="mg-feature-icon-title">
                                    <i class="fa fa-car"></i>
                                    <h3>Car hire</h3>
                                </div>
                                <p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mg-feature">
                                <div class="mg-feature-icon-title">
                                    <i class="fa fa-phone"></i>
                                    <h3>Wake-up call</h3>
                                </div>
                                <p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mg-feature">
                                <div class="mg-feature-icon-title">
                                    <i class="fa fa-coffee"></i>
                                    <h3>Coffee and tea</h3>
                                </div>
                                <p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mg-feature">
                                <div class="mg-feature-icon-title">
                                    <i class="fa fa-cogs"></i>
                                    <h3>Free Wi-Fi</h3>
                                </div>
                                <p>Didicisset labore vitium referenda labor peccant integre turpe est tantopere, eius defuturum sua dolorum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
