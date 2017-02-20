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



<!-- Metas Form Input -->
<div class="form-group">
    <div class="col-md-4 col-md-offset-4">
        <div>
            {!! Form::label('breakfast', 'Breakfast', ['class' => 'control-label']) !!}
            {{ Form::checkbox('breakfast', 1, isset($roomMetas) ? $roomMetas->breakfast : null, ['class' => 'pull-right']) }}
        </div>
        <div>
            {!! Form::label('air_condition', 'Air Condition', ['class' => 'control-label']) !!}
            {{ Form::checkbox('air_condition', 1, isset($roomMetas) ? $roomMetas->air_condition : null, ['class' => 'pull-right']) }}
        </div>
        <div>
            {!! Form::label('free_parking', 'Free Parking', ['class' => 'control-label']) !!}
            {{ Form::checkbox('free_parking', 1, isset($roomMetas) ? $roomMetas->free_parking : null, ['class' => 'pull-right']) }}
        </div>
        <div>
            {!! Form::label('room_service', 'Room Service', ['class' => 'control-label']) !!}
            {{ Form::checkbox('room_service', 1, isset($roomMetas) ? $roomMetas->room_service : null, ['class' => 'pull-right']) }}
        </div>
        <div>
            {!! Form::label('gym', 'Gym', ['class' => 'control-label']) !!}
            {{ Form::checkbox('gym', 1, isset($roomMetas) ? $roomMetas->gym : null, ['class' => 'pull-right']) }}
        </div>
        <div>
            {!! Form::label('tv', 'Tv', ['class' => 'control-label']) !!}
            {{ Form::checkbox('tv', 1, isset($roomMetas) ? $roomMetas->tv : null, ['class' => 'pull-right']) }}
        </div>
        <div>
            {!! Form::label('wi-fi', 'Wi-Fi', ['class' => 'control-label']) !!}
            {{ Form::checkbox('wi-fi', 1, isset($roomMetas) ? $roomMetas->{$wiFI = 'wi-fi'} : null, ['class' => 'pull-right']) }}
        </div>
        <div>
            {!! Form::label('elevator', 'Elevator', ['class' => 'control-label']) !!}
            {{ Form::checkbox('elevator', 1, isset($roomMetas) ? $roomMetas->elevator : null, ['class' => 'pull-right']) }}
        </div>
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
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-sm btn-main form-control']) !!}
    </div>
</div>
