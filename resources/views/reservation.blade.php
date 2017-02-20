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
                        <div class="text-center">
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
                        </div>

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
                                                                    <input type="text" class="form-control" value="{!! isset($options) ? $options['arrival_date'] : null !!}" name="arrival_date" id="arrival_date" placeholder="Check In">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-6">
                                                                <div class="input-group date mg-check-out">
                                                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                    <input type="text" class="form-control" value="{!! isset($options) ? $options['departure_date'] : null !!}" name="departure_date" id="departure_date" placeholder="Check Out">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        <input type="number" class="form-control" value="{!! isset($options) ? $options['number_of_guests'] : null !!}" name="number_of_guests" id="number_of_guests" placeholder="Guests">
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
                                        @foreach($rooms as $room)
                                        <div class="mg-avl-room">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <a href="#"><img src="{!! asset('images/room-3.png') !!}" alt="" class="img-responsive"></a>
                                                </div>
                                                <div class="col-sm-7">
                                                    <h3 class="mg-avl-room-title"><a href="#">{!! $room->roomType->name !!}</a> <span>${!! $room->roomType->price !!}/Night</span></h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        Officia minuti firme desperantes vix sempiternum sentiri possunt,
                                                        philosophia permanentes, sentit careret.</p>
                                                    <div class="row mg-room-fecilities">
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                @if($room->metas->breakfast == 1)
                                                                    <li><i class="glyphicon glyphicon-cutlery"></i> Breakfast</li>
                                                                @endif
                                                                @if($room->metas->air_condition == 1)
                                                                    <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                                                @endif
                                                                @if($room->metas->free_parking == 1)
                                                                    <li><i class="fa fa-car"></i> Free Parking</li>
                                                                @endif
                                                                @if($room->metas->room_service == 1)
                                                                    <li><i class="fa fa-bed"></i> Room service</li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <ul>
                                                                @if($room->metas->gym == 1)
                                                                    <li><i class="fa fa-trophy"></i> GYM Facility</li>
                                                                @endif
                                                                @if($room->metas->tv == 1)
                                                                    <li><i class="fa fa-tv"></i> TV LCD</li>
                                                                @endif
                                                                @if($room->metas->{$wiFi = 'wi-fi'} == 1)
                                                                    <li><i class="fa fa-wifi"></i> Wi-fi service</li>
                                                                @endif
                                                                @if($room->metas->elevator == 1)
                                                                    <li><i class="glyphicon glyphicon-arrow-up"></i> Elevator</li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="#reservation-details" onclick="selectRoom({{$room}})" class="btn btn-main btn-next-tab">Select This Room</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="reservation-details">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mg-book-form-personal">
                                            <h2 class="mg-sec-left-title">Reservation Details</h2>
                                            <div class="mg-cart-container mg-paid">
                                                <aside class="mg-widget mt50" id="mg-room-cart">
                                                    <h2 class="mg-widget-title">Reservation Details</h2>
                                                    <div class="mg-widget-cart">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mg-cart-room">
                                                                    <img src="images/room-1.png" alt="Delux Room" class="img-responsive">
                                                                    <h3 id="roomTypeName"></h3>
                                                                    <p>Verbis texit statua status suo quidque concordia.
                                                                        Octavio, ignavi, iudicante intereant accusamus vitiis
                                                                        primos ullum paranda zenonem. Censes cadere urbanitas
                                                                        texit dicebas maius tranquilli, foris morborum divinum que medium utilior
                                                                        crudelis affert, quaerendum refert sequimur atqui ullus d ornamenta consumeret ut divinum,
                                                                        concedo percurri elaborare.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h3 class="mg-payment-id">Room ID:
                                                                    <span id="roomId"></span>
                                                                </h3>
                                                                <div class="mg-widget-cart-row">
                                                                    <strong>Check In:</strong>
                                                                    <span id="arrivalDate"></span>
                                                                </div>
                                                                <div class="mg-widget-cart-row">
                                                                    <strong>Check Out:</strong>
                                                                    <span id="departureDate"></span>
                                                                </div>
                                                                <div class="mg-widget-cart-row">
                                                                    <strong>Guests:</strong>
                                                                    <span id="guestsNumber">2</span>
                                                                </div>
                                                                <div class="mg-cart-address">
                                                                    <strong>Your Profile:</strong>
                                                                    <address>
                                                                        <strong>{!! Auth::user()->first_name !!} {!! Auth::user()->last_name !!}</strong><br>
                                                                        {!! Auth::user()->email !!}<br>
                                                                    </address>
                                                                </div>
                                                                <div class="mg-cart-total">
                                                                    <strong>Per Night:</strong>
                                                                    <span id="price">$</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </aside>
                                            </div>
                                            <a href="#thank-you" onclick="reservation()" class="btn btn-dark-main btn-next-tab pull-right">Next</a>
                                            <a href="#select-room" class="btn btn-default btn-prev-tab pull-left">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="thank-you">
                                <div  id="statusDiv">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <div class="mg-alert-icon"><i id="statusIcon" ></i></div>
                                    <h3 class="mg-alert-payment" id="statusAlert"></h3>
                                </div>
                                <div class="text-center">
                                    <a href="{!! route('home') !!}" class="btn btn-dark-main">Return</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    @parent
    <script>
        function selectRoom(room) {
            $('#roomId').text(room._id);
            $('#roomTypeName').text(room.room_type.name);
            $('#arrivalDate').text($('#arrival_date').val());
            $('#departureDate').text($('#departure_date').val());
            $('#guestsNumber').text($('#number_of_guests').val());
            $('#price').text("$" + room.room_type.price);
        }

        function reservation() {
            $.ajax({
               method: 'POST',
               url: '/reservation',
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
               data: {
                   'arrival_date': $('#arrival_date').val(),
                   'departure_date': $('#departure_date').val(),
                   'number_of_guests': $('#number_of_guests').val(),
                   'room_id': $('#roomId').text()
               },
               success: function (data) {
                   $('#statusDiv').addClass('alert alert-success alert-dismissible clearfix');
                   $('#statusIcon').addClass('fa fa-check');
                    $('#statusAlert').text("Thank you! Your reservation is confirmed.");
               },
               error: function(data) {
                   $('#statusDiv').addClass('alert alert-danger alert-dismissible clearfix');
                    $('#statusIcon').addClass('fa fa-times');
                    $('#statusAlert').text("Something went wrong! Please, try again.");
               }
            });
        }
    </script>
@endsection