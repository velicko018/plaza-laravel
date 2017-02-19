@extends('layouts.master')

@section('content')
    <div class="mg-page-title parallax" style="background-position: 50% 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Profile</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 30px;">
        <div class="mg-tab-left-nav">

            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active">
                    <a href="#profile3" aria-controls="profile3" role="tab" data-toggle="tab">
                        <i class="glyphicon glyphicon-user"></i> Profile
                    </a>
                </li>
                <li role="presentation">
                    <a href="#password3" aria-controls="password3" role="tab" data-toggle="tab">
                        <i class="glyphicon glyphicon-lock"></i> Password
                    </a>
                </li>
                <li role="presentation">
                    <a href="#reservations3" aria-controls="reservations3" role="tab" data-toggle="tab">
                        <i class="glyphicon glyphicon-tags"></i> My Reservations
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="profile3">
                    <h2>Edit Profile</h2>
                    <hr/>
                    <div style="padding-left: 10%; padding-right: 10%;">
                        {!! Form::model($user, ['route' => ['admin.users.update', $user->id], "method" => "put", "class" => "form-horizontal", 'files' => true] ) !!}
                            <div class="mg-book-form-input">
                                {{ Form::label('first_name','First Name', ['class' => 'control-label']) }}
                                {{ Form::text('first_name',null, ['class' => 'form-control', 'id' => 'first_name', 'value' => old('first_name')]) }}
                            </div>
                            <div class="mg-book-form-input">
                                {{ Form::label('last_name','Last Name', ['class' => 'control-label']) }}
                                {{ Form::text('last_name',null, ['class' => 'form-control', 'id' => 'last_name', 'value' => old('last_name')]) }}
                            </div>
                            <div class="mg-book-form-input">
                                {{ Form::label('email','Email Address', ['class' => 'control-label']) }}
                                {{ Form::text('email',null, ['class' => 'form-control', 'id' => 'email', 'value' => old('email')]) }}
                            </div>
                            <button type="submit" class="btn btn-main">Update</button>
                        {!! Form::close() !!}
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="password3">
                    <h2>Change Password</h2>
                    <hr/>
                    <div style="padding-left: 10%; padding-right: 10%;">
                        <form method="post">
                            <div class="mg-book-form-input">
                                {{ Form::label('old_password','Old Password', ['class' => 'control-label']) }}
                                 {{ Form::password('old_password',null, ['class' => 'form-control', 'id' => 'old_password']) }}
                            </div>
                            <div class="mg-book-form-input">
                                {{ Form::label('new_password','New Password', ['class' => 'control-label']) }}
                                 {{ Form::password('new_password',null, ['class' => 'form-control', 'id' => 'new_password']) }}
                            </div>
                            <div class="mg-book-form-input">
                                {{ Form::label('repeat_password','Repeat Password', ['class' => 'control-label']) }}
                                {{ Form::password('repeat_password',null, ['class' => 'form-control', 'id' => 'repeat_password']) }}
                            </div>
                            <button type="submit" class="btn btn-main">Update Password</button>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="reservations3">
                    <h2>My Reservations</h2>
                    <hr/>
                    <div style="padding-left: 10%; padding-right: 10%;">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Room No.</th>
                                <th>Floor</th>
                                <th>Reserved from</th>
                                <th>Reserved until</th>
                            </thead>
                            {{--@foreach($user->reservations as #reservation)--}}
                                {{--<tr>--}}
                                    {{--<td>{!! $reservation->number !!}</td>--}}
                                    {{--<td>{!! $reservation->number !!}</td>--}}
                                    {{--<td>{!! $reservation->number !!}</td>--}}
                                    {{--<td>{!! $reservation->number !!}</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection