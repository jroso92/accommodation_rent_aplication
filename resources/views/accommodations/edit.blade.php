@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('accommodations.update', ['accommodation' => $accommodation->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- accommodation name -->
        <div class="form-group">
            <label for="name">Accommodation name</label>
            <input value="{{ $accommodation->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
         <!-- accommodation description -->
         <div class="form-group">
            <label for="description">Accommodation description</label>
            <input value="{{ $accommodation->description }}" name="description" type="text" class="form-control" id="description">
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>
         <!-- address -->
         <div class="form-group">
            <label for="address">Address</label>
            <input value="{{ $accommodation->address }}" name="address" type="text" class="form-control" id="address">
            @if ($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
            @endif
        </div>
        <!-- room count -->
        <div class="form-group">
            <label for="room_count">Room count</label>
            <input value="{{ $accommodation->room_count }}" name="room_count" type="number" class="form-control" id="room_count">
            @if ($errors->has('room_count'))
                <span class="text-danger">{{ $errors->first('room_count') }}</span>
            @endif
        </div>
        <!-- bed count -->
        <div class="form-group">
            <label for="bed_count">Bed count</label>
            <input value="{{ $accommodation->bed_count }}" name="bed_count" type="number" class="form-control" id="bed_count">
            @if ($errors->has('bed_count'))
                <span class="text-danger">{{ $errors->first('bed_count') }}</span>
            @endif
        </div>
        <!-- max person count -->
        <div class="form-group">
            <label for="max_person_count">Max person count</label>
            <input value="{{ $accommodation->max_person_count }}" name="max_person_count" type="number" class="form-control" id="max_person_count">
            @if ($errors->has('max_person_count'))
                <span class="text-danger">{{ $errors->first('max_person_count') }}</span>
            @endif
        </div>
        <!-- is available -->
        <div class="form-group">
            <label for="is_available">Is available</label>
            <input value="{{ $accommodation->is_available }}" name="is_available" type="number" class="form-control" id="is_available">
            @if ($errors->has('is_available'))
                <span class="text-danger">{{ $errors->first('is_available') }}</span>
            @endif
        </div>
        <!-- price per night -->
        <div class="form-group">
            <label for="price_per_night">Price per night</label>
            <input value="{{ $accommodation->is_available }}" name="price_per_night" type="number" class="form-control" id="price_per_night">
            @if ($errors->has('price_per_night'))
                <span class="text-danger">{{ $errors->first('price_per_night') }}</span>
            @endif
        </div>
        <!-- type id -->
        <div class="form-group">
            <label for="type_id">Accommodation type id</label>
            {{ Form::select('accommodation_type_id', $accommodation_types, $accommodation->accommodation_type_id, ['class' => 'form-control', 'id' => 'accommodation_type'])}}

        </div>
        <!-- city id -->
        <div class="form-group">
            <label for="city_id">City id</label>
            {{ Form::select('city_id', $cities, $accommodation->city_id, ['class' => 'form-control', 'id' => 'city'])}}

        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('accommodations.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection