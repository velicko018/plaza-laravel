@extends('admin.dashboard')

@section('page-title', 'Create Reservation')
@section('page-title-small', '')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop


@section('admin-content')
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-md-6 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Create Reservation</h4>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => ['admin.reservations.store'], "class" => "form-horizontal"] ) !!}
                        @include('admin.reservations.partials.form', ['submitButtonText' => 'Create'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!-- end panel -->
        <!-- end col-6 -->
    </div>
@stop
