@extends('layouts.master')

@section('content')
    <div class="preloader"></div>
    <div class="mg-page-title parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Hotel Rooms</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="mg-page mg-available-rooms">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @foreach($rooms as $room)
                        <div class="mg-avl-room">
                            <div class="row">
                                <div class="col-sm-5">
                                    <a href="#"><img src="{!! asset('images/room-' . random_int(1,4) . '.png') !!}" alt="" class="img-responsive"></a>
                                </div>
                                <div class="col-sm-7">
                                    <h3 class="mg-avl-room-title"><a href="#">{!! $room->roomType->name !!}</a> <span>${!! $room->roomType->price !!}/Night</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia minuti firme desperantes vix sempiternum sentiri possunt, philosophia permanentes, sentit careret.</p>
                                    <div class="row mg-room-fecilities">
                                        <div class="col-xs-6">
                                            <ul>
                                                <li><i class="glyphicon glyphicon-cutlery"></i> Breakfast</li>
                                                <li><i class="fa fa-sun-o"></i> Air conditioning</li>
                                                <li><i class="fa fa-car"></i> Free Parking</li>
                                                <li><i class="fa fa-bed"></i> Room service</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6">
                                            <ul>
                                                <li><i class="fa fa-trophy"></i> GYM Facility</li>
                                                <li><i class="fa fa-tv"></i> TV LCD</li>
                                                <li><i class="fa fa-wifi"></i> Wi-fi service</li>
                                                <li><i class="glyphicon glyphicon-arrow-up"></i> Elevator</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="{!! route('room', ['id' => $room->_id]) !!}" class="btn btn-dark">View Details <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection