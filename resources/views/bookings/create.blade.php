@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('bookings.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- reserved at -->
        <div class="form-group">
            <label for="reserved_at">Reserved at</label>
            <input value="{{ @old('reserved_at') }}" name="reserved_at" type="date" class="form-control" id="reserved_at">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('reserved_at') }}</span>
            @endif
        </div>
        <!-- reserved until -->
        <div class="form-group">
            <label for="reserved_until">Reserved until</label>
            <input value="{{ @old('reserved_until') }}" name="reserved_until" type="date" class="form-control" id="reserved_until">
            @if ($errors->has('reserved_until'))
                <span class="text-danger">{{ $errors->first('reserved_until') }}</span>
            @endif
        </div>
        <!-- adult number -->
        <div class="form-group">
            <label for="adult_no">Adult no</label>
            <input value="{{ @old('adult_no') }}" name="adult_no" type="number" class="form-control" id="adult_no">
            @if ($errors->has('adult_no'))
                <span class="text-danger">{{ $errors->first('adult_no') }}</span>
            @endif
        </div>
        <!-- child number -->
        <div class="form-group">
            <label for="child_no">Child no</label>
            <input value="{{ @old('child_no') }}" name="child_no" type="number" class="form-control" id="child_no">
            @if ($errors->has('child_no'))
                <span class="text-danger">{{ $errors->first('child_no') }}</span>
            @endif
        </div>
        <!-- price -->
        <div class="form-group">
            <label for="price">Price</label>
            <input value="{{ @old('price') }}" name="price" type="number" class="form-control" id="price">
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif
        </div>
        <!-- accommodation id -->
        <div class="form-group">
            <label for="accommodation_id">Accommodation id</label>
            <input value="{{ @old('accommodation_id') }}" name="accommodation_id" type="number" class="form-control" id="accommodation_id">
            @if ($errors->has('accommodation_id'))
                <span class="text-danger">{{ $errors->first('accommodation_id') }}</span>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('bookings.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection