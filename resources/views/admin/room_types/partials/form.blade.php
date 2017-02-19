<!-- Name Form Input -->
<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
        @if ($errors->has('name'))
            <div class="alert-danger">
                <strong>{{ $errors->first('name') }}</strong>
            </div>
        @endif
    </div>
</div>

<!-- Max Guests Form Input -->
<div class="form-group">
    {!! Form::label('max_guest', 'Max Guests:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::number('max_guests', null, ['class' => 'form-control', 'placeholder' => 'Max Guests']) !!}
        @if ($errors->has('max_guests'))
            <div class="alert-danger">
                <strong>{{ $errors->first('max_guests') }}</strong>
            </div>
        @endif
    </div>
</div>

<!-- Max Guests Form Input -->
<div class="form-group">
    {!! Form::label('total_rooms', 'Total Rooms:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::number('total_rooms', null, ['class' => 'form-control', 'placeholder' => 'Total Rooms']) !!}
        @if ($errors->has('total_rooms'))
            <div class="alert-danger">
                <strong>{{ $errors->first('total_rooms') }}</strong>
            </div>
        @endif
    </div>
</div>

<!-- Price Form Input -->
<div class="form-group">
    {!! Form::label('price', 'Price:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Price']) !!}
        @if ($errors->has('price'))
            <div class="alert-danger">
                <strong>{{ $errors->first('price') }}</strong>
            </div>
        @endif
    </div>
</div>

<!-- Max Guests Form Input -->
<div class="form-group">
    {!! Form::label('description', 'Descriptions:', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descriptions']) !!}
        @if ($errors->has('description'))
            <div class="alert-danger">
                <strong>{{ $errors->first('description') }}</strong>
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

