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
        <ul class="nav nav-tabs">
            <li role="presentation" class="{{ \Request::route()->getName() == 'admin.rooms.index' ? 'active' : '' }}">
                <a href="{!! route('admin.rooms.index') !!}" >
                    <i class="fa fa-bed"></i>
                    Rooms
                </a>
            </li>
            <li  role="presentation" class="{{ \Request::route()->getName() == 'admin.room_types.index' ? 'active' : '' }}">
                <a href="{!! route('admin.room_types.index') !!}" >
                    <i class="glyphicon glyphicon-bed"></i>
                    Room Types
                </a>
            </li>
            <li  role="presentation" class="{{ \Request::route()->getName() == 'admin.reservations.index' ? 'active' : '' }}">
                <a href="{!! route('admin.reservations.index') !!}" >
                    <i class="glyphicon glyphicon-tags"></i>
                    Reservations
                </a>
            </li>
            <li  role="presentation" class="{{ \Request::route()->getName() == 'admin.users.index' ? 'active' : '' }}">
                <a href="{!! route('admin.users.index') !!}" >
                    <i class="glyphicon glyphicon-user"></i>
                    Users
                </a>
            </li>
        </ul>
        <div style="min-height: 200px">
            @yield('admin-content')
        </div>

    </div>
@endsection


@section('extra-js')
    <script>
        $('admin-panel-nbp').click(function () {
            $('admin-panel-nbp').removeClass('active');
            console.log('klik');
            $(this).addClass('active');
        })
    </script>
@endsection
