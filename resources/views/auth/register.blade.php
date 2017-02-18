@extends('layouts.master')

@section('content')

<div class="mg-page-title parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Register</h2>
                <p>Cogitavisse erant puerilis utrum efficiantur adhuc expeteretur.</p>
            </div>
        </div>
    </div>
</div>
<div class="mg-page">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="mg-sec-left-title">Register</h2>
                <form class="clearfix" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="mg-contact-form-input{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        {{ Form::label('first_name','First Name', ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{ Form::text('first_name',null, ['class' => 'form-control', 'id' => 'first_name', 'value' => old('first_name')]) }}
                            @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="mg-contact-form-input{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        {{ Form::label('last_name','Last Name', ['class' => 'col-md-4 control-label']) }}

                        <div class="col-md-6">
                            {{ Form::text('last_name',null, ['class' => 'form-control', 'id' => 'last_name', 'value' => old('last_name')]) }}
                            @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="mg-contact-form-input{{ $errors->has('email') ? ' has-error' : '' }}">
                        {{ Form::label('email','Email', ['class' => 'col-md-4 control-label']) }}

                        <div class="col-md-6">
                           {{ Form::text('email',null, ['class' => 'form-control', 'id' => 'email', 'value' => old('email')]) }}

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="mg-contact-form-input{{ $errors->has('password') ? ' has-error' : '' }}">
                        {{ Form::label('password','Password', ['class' => 'col-md-4 control-label']) }}

                        <div class="col-md-6">
                            {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="mg-contact-form-input">
                        {{ Form::label('password_confirmation','Password Confirm', ['class' => 'col-md-4 control-label']) }}

                        <div class="col-md-6">
                            {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation']) }}
                        </div>
                    </div>

                    <div class="mg-contact-form-input">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-main">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
