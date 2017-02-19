@extends('admin.dashboard')

@section('admin-content')
    <div class="row">
    @include('layouts.partial.modal_delete')
        <a href="{!! route('admin.users.create') !!}"><button type="button" class="btn btn-dark-main m-r-5 m-b-5 pull-right">New User</button></a>

    <!-- begin col-12 -->
        <div class="col-md-12 ui-sortable">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="table-basic-3">
                <div class="panel-heading">
                    <h4 class="panel-title">Users List</h4>
                </div>
                <div class="panel-body">
                    @include('admin.users.partials.table')
                    {!! $users->render()  !!}
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
@stop