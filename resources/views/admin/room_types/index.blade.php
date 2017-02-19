@extends('admin.dashboard')


@section('admin-content')
    <div class="row">
    @include('layouts.partial.modal_delete')
        <a href="{!! route('admin.room_types.create') !!}"><button type="button" class="btn btn-dark-main m-r-5 m-b-5 pull-right">New Room Type</button></a>

    <!-- begin col-12 -->
        <div class="col-md-12 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="table-basic-3">
                <div class="panel-heading">
                    <h4 class="panel-title">Room Types List</h4>
                </div>
                <div class="panel-body">
                    @include('admin.room_types.partials.table')
                    {!! $roomTypes->render()  !!}
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
@stop