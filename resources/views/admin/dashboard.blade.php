@extends('layouts.master')

@section('extra-css')
    <style>
        ul li{
            display: inline !important;
        }
    </style>
@endsection

@section('content')
    <div class="mg-page-title parallax" style="background-position: 50% 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Dashboard</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 30px;">
        <div class="mg-tab-left-nav">

            <ul class="nav nav-tabs nav-justified " >
                <li >
                    <a href="{!! route('admin.rooms.index') !!}" >
                        <i class="fa fa-bed"></i>
                        Rooms
                    </a>
                </li>
                <li >
                    <a href="{!! route('admin.room_types.index') !!}" >
                        <i class="glyphicon glyphicon-bed"></i>
                        Room Types
                    </a>
                </li>
                <li >
                    <a href="{!! route('admin.reservations.index') !!}" >
                        <i class="glyphicon glyphicon-tags"></i>
                        Reservations
                    </a>
                </li>
                <li >
                    <a href="{!! route('admin.users.index') !!}" >
                        <i class="glyphicon glyphicon-user"></i>
                        Users
                    </a>
                </li>
            </ul>
        </div>
        @yield('admin-content')

    </div>
@endsection



