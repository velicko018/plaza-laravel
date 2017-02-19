<!-- Room Form Input -->
<div class="form-group{{ $errors->has('room_id') ? ' has-error' : '' }}">
    {!! Form::label('room_id', 'Room Number:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::select('room_id', $rooms, null, ['class' => 'form-control', 'placeholder' => 'Select Room Number']) !!}
        @if ($errors->has('room_id'))
            <span class="help-block">
                <strong>{{ $errors->first('room_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Number Of Guests Form Input -->
<div class="form-group{{ $errors->has('number_of_guests') ? ' has-error' : '' }}">
    {!! Form::label('number_of_guests', 'Number Of Guests:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::number('number_of_guests', null, ['class' => 'form-control', 'placeholder' => 'Number Of Guests']) !!}
        @if ($errors->has('number_of_guests'))
            <span class="help-block">
                <strong>{{ $errors->first('number_of_guests') }}</strong>
            </span>
        @endif
    </div>
</div>



<!-- Arrival Date Form Input -->
<div class="form-group{{ $errors->has('arrival_date') ? ' has-error' : '' }}">
    {!! Form::label('arrival_date', 'Arrival Date:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('arrival_date', null, ['class' => 'form-control', 'placeholder' => 'Arrival Date']) !!}
        @if ($errors->has('arrival_date'))
            <span class="help-block">
                <strong>{{ $errors->first('arrival_date') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Departure Date Form Input -->
<div class="form-group{{ $errors->has('departure_date') ? ' has-error' : '' }}">
    {!! Form::label('departure_date', 'Departure Date:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('departure_date', null, ['class' => 'form-control', 'placeholder' => 'Departure Date']) !!}
        @if ($errors->has('departure_date'))
            <span class="help-block">
                <strong>{{ $errors->first('departure_date') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Status Form Input -->
<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
    {!! Form::label('status', 'Status:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::select('status', ['Not Active', 'Active'], null, ['class' => 'form-control', 'placeholder' => 'Select']) !!}
        @if ($errors->has('status'))
            <span class="help-block">
                <strong>{{ $errors->first('status') }}</strong>
            </span>
        @endif
    </div>
</div>

<!-- Submit Form Button -->
<div class="form-group">
    <div class="col-md-4 col-md-offset-4">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-sm btn-main form-control']) !!}
    </div>
</div>
