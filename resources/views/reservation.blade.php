@extends('layouts.master')

@section('content')

    <div class="preloader"></div>
    <div class="mg-page-title parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Booking</h2>
                    <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mg-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mg-booking-form">

                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#select-room" aria-controls="select-room" role="tab" data-toggle="tab">
                                    <span class="mg-bs-tab-num">1</span><span class="mg-bs-bar"></span>Select Room
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#reservation-details" aria-controls="reservation-details" role="tab" data-toggle="tab">
                                    <span class="mg-bs-tab-num">2</span><span class="mg-bs-bar"></span>Reservation details
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#thank-you" aria-controls="thank-you" role="tab" data-toggle="tab">
                                    <span class="mg-bs-tab-num">3</span>Thank You
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="select-room">
                                <div class="mg-saerch-room">
                                    <div class="mg-book-now mt80">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h2 class="mg-bn-title">Search Rooms <span class="mg-bn-big">For rates & availability</span></h2>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="mg-bn-forms">
                                                    <form class="form-horizontal" role="form" method="GET" action="{{ route('search') }}">
                                                        {{ csrf_field() }}
                                                        <div class="row">
                                                            <div class="col-md-3 col-xs-6">
                                                                <div class="input-group date mg-check-in">
                                                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                    <input type="text" class="form-control" name="arrival_date" id="arrival_date" placeholder="Check In">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-6">
                                                                <div class="input-group date mg-check-out">
                                                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                    <input type="text" class="form-control" name="departure_date" id="departure_date" placeholder="Check Out">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        <input type="number" class="form-control" name="number_of_guests" id="number_of_guests" placeholder="Guests">
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
                                <div class="mg-available-rooms">
                                    <h2 class="mg-sec-left-title">Available Rooms</h2>
                                    <div class="mg-avl-rooms">
                                        <div class="mg-avl-room">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <a href="#"><img src="images/room-1.png" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="col-sm-7">
                                                    <h3 class="mg-avl-room-title"><a href="#">Super Deluxe</a> <span>$249<sup>.99</sup>/Night</span></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.</p>
                                                    <div class="row mg-room-fecilities">
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                <li><i class="fp-ht-bed"></i> 2 King Beds</li>
                                                                <li><i class="fp-ht-food"></i> Breakfast</li>
                                                                <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                <li><i class="fp-ht-dumbbell"></i> GYM fecility</li>
                                                                <li><i class="fp-ht-tv"></i> TV LCD</li>
                                                                <li><i class="fp-ht-computer"></i> Wi-fi service</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#personal-info" class="btn btn-main btn-next-tab">Select This Room</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mg-avl-room">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <a href="#"><img src="images/room-2.png" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="col-sm-7">
                                                    <h3 class="mg-avl-room-title"><a href="#">Super Deluxe</a> <span>$249<sup>.99</sup>/Night</span></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.</p>
                                                    <div class="row mg-room-fecilities">
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                <li><i class="fp-ht-bed"></i> 2 King Beds</li>
                                                                <li><i class="fp-ht-food"></i> Breakfast</li>
                                                                <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                <li><i class="fp-ht-dumbbell"></i> GYM fecility</li>
                                                                <li><i class="fp-ht-tv"></i> TV LCD</li>
                                                                <li><i class="fp-ht-computer"></i> Wi-fi service</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#personal-info" class="btn btn-main btn-next-tab">Select This Room</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mg-avl-room">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <a href="#"><img src="images/room-3.png" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="col-sm-7">
                                                    <h3 class="mg-avl-room-title"><a href="#">Super Deluxe</a> <span>$249<sup>.99</sup>/Night</span></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.</p>
                                                    <div class="row mg-room-fecilities">
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                <li><i class="fp-ht-bed"></i> 2 King Beds</li>
                                                                <li><i class="fp-ht-food"></i> Breakfast</li>
                                                                <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                <li><i class="fp-ht-dumbbell"></i> GYM fecility</li>
                                                                <li><i class="fp-ht-tv"></i> TV LCD</li>
                                                                <li><i class="fp-ht-computer"></i> Wi-fi service</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#personal-info" class="btn btn-main btn-next-tab">Select This Room</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="reservation-details">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mg-book-form-personal">
                                            <h2 class="mg-sec-left-title">Personal Info</h2>
                                            <div class="mg-cart-container mg-paid">
                                                <aside class="mg-widget mt50" id="mg-room-cart">
                                                    <h2 class="mg-widget-title">Booking Details</h2>
                                                    <div class="mg-widget-cart">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mg-cart-room">
                                                                    <img src="images/room-1.png" alt="Delux Room" class="img-responsive">
                                                                    <h3>Super Delux</h3>
                                                                    <p>Verbis texit statua status suo quidque concordia. Octavio, ignavi, iudicante intereant accusamus vitiis primos ullum paranda zenonem. Censes cadere urbanitas texit dicebas maius tranquilli, foris morborum divinum que medium utilior crudelis affert, quaerendum refert sequimur atqui ullus d ornamenta consumeret ut divinum, concedo percurri elaborare.</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h3 class="mg-payment-id">Your Payment ID: #105152396140</h3>
                                                                <div class="mg-widget-cart-row">
                                                                    <strong>Check In:</strong>
                                                                    <span>27 Jan, 2015</span>
                                                                </div>
                                                                <div class="mg-widget-cart-row">
                                                                    <strong>Check Out:</strong>
                                                                    <span>28 Jan, 2015</span>
                                                                </div>
                                                                <div class="mg-widget-cart-row">
                                                                    <strong>Adults:</strong>
                                                                    <span>2</span>
                                                                </div>
                                                                <div class="mg-widget-cart-row">
                                                                    <strong>Child:</strong>
                                                                    <span>1</span>
                                                                </div>
                                                                <div class="mg-cart-address">
                                                                    <strong>Your Address:</strong>
                                                                    <address>
                                                                        <strong>John Doe</strong><br>
                                                                        Level 13, 2 Elizabeth St, Melbourne<br>
                                                                        Victoria 3000 Australia
                                                                    </address>
                                                                </div>
                                                                <div class="mg-cart-total">
                                                                    <strong>Total:</strong>
                                                                    <span>$249.99</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                            <a href="#thank-you" class="btn btn-dark-main btn-next-tab pull-right">Next</a>
                                            <a href="#select-room" class="btn btn-default btn-prev-tab pull-left">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="thank-you">
                                <div class="alert alert-success alert-dismissible clearfix">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <div class="mg-alert-icon"><i class="fa fa-check"></i></div>
                                    <h3 class="mg-alert-payment">Thank you! Your booking is confirmed. Invoice Sent in your email address</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection