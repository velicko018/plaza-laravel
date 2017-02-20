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
                                        <div class="col-xs-6">
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