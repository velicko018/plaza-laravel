<!-- Room Number Form Input -->
<div class="form-group">
    {!! Form::label('number', 'Number:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Number']) !!}
        @if ($errors->has('number'))
            <div class="alert-danger">
                <strong>{{ $errors->first('number') }}</strong>
            </div>
        @endif
    </div>
</div>

<!-- Room Floor Form Input -->
<div class="form-group">
    {!! Form::label('floor', 'Floor:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('floor', null, ['class' => 'form-control', 'placeholder' => 'Floor']) !!}
        @if ($errors->has('floor'))
            <div class="alert-danger">
                <strong>{{ $errors->first('floor') }}</strong>
            </div>
        @endif
    </div>
</div>

<!-- Room Type Form Input -->
<div class="form-group">
    {!! Form::label('room_type_id', 'Room Type:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::select('room_type_id', $roomTypes, null, ['class' => 'form-control', 'placeholder' => 'Select']) !!}
        @if ($errors->has('room_type_id'))
            <div class="alert-danger">
                <strong>{{ $errors->first('room_type_id') }}</strong>
            </div>
        @endif
    </div>
</div>

<!-- Submit Form Button -->
<div class="form-group">
    <div class="col-md-4 col-md-offset-4">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-sm btn-success form-control']) !!}
    </div>
</div>
