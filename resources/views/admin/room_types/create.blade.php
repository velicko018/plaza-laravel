@extends('admin.dashboard')

@section('page-title', 'Create Room Type')
@section('page-title-small', '')

@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop


@section('admin-content')
    <div class="row" style="margin-top: 10px;">
        <!-- begin col-6 -->
        <div class="col-md-6 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Create Room Type</h4>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => ['admin.room_types.store'], "class" => "form-horizontal"] ) !!}
                        @include('admin.room_types.partials.form', ['submitButtonText' => 'Create'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!-- end panel -->
        <!-- end col-6 -->
    </div>
@stop
