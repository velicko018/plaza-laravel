@extends('layouts.master')

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

            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active">
                    <a href="#" aria-controls="profile3" role="tab"
                       data-toggle="tab"><i class="glyphicon glyphicon-user"></i>
                        Profile</a>
                </li>
                <li role="presentation"><a href="#" aria-controls="password3" role="tab" data-toggle="tab"><i
                                class="glyphicon glyphicon-lock"></i> Password</a></li>
                <li role="presentation"><a href="#" aria-controls="password3" role="tab" data-toggle="tab"><i
                                class="glyphicon glyphicon-lock"></i> Password</a></li>
                <li role="presentation"><a href="#" aria-controls="password3" role="tab" data-toggle="tab"><i
                                class="glyphicon glyphicon-lock"></i> Password</a></li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="profile3">

                </div>
            </div>
        </div>
    </div>
@endsection