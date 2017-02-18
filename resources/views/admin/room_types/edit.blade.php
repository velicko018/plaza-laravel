@extends('admin.dashboard')

@section('page-title', 'Edit Room Type')
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
                    <h4 class="panel-title">Edit Room Type</h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($roomType, ['route' => ['admin.room_types.update', $roomType->id], "method" => "put", "class" => "form-horizontal"] ) !!}
                        @include('admin.room_types.partials.form', ['submitButtonText' => 'Update'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!-- end panel -->
        <!-- end col-6 -->
    </div>
@stop

@section('extra-js')
@stop
