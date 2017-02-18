<!-- First Name Form Input -->
<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
    {!! Form::label('first_name', 'First Name:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Last Name Form Input -->
<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
    {!! Form::label('last_name', 'Last Name:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
        @if ($errors->has('last_name'))
            <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- E-Mail Form Input -->
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'E-Mail:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-Mail']) !!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    {{ Form::label('password','Password', ['class' => 'col-md-4 control-label']) }}

    <div class="col-md-8">
        {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    {{ Form::label('password_confirmation','Password Confirm', ['class' => 'col-md-4 control-label']) }}

    <div class="col-md-8">
        {{ Form::password('password_confirmation', ['class' => 'form-control', 'id' => 'password_confirmation']) }}
    </div>
</div>

<!-- Submit Form Button -->
<div class="form-group">
    <div class="col-md-4 col-md-offset-4">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-sm btn-success form-control']) !!}
    </div>
</div>
