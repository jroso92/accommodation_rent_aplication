@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('accommodations.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- accommodation name -->
        <div class="form-group">
            <label for="name">Accommodation name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
         <!-- accommodation description -->
         <div class="form-group">
            <label for="description">Accommodation description</label>
            <input value="{{ @old('description') }}" name="description" type="text" class="form-control" id="description">
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>
         <!-- address -->
         <div class="form-group">
            <label for="address">Address</label>
            <input value="{{ @old('address') }}" name="address" type="text" class="form-control" id="address">
            @if ($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
            @endif
        </div>
        <!-- room count -->
        <div class="form-group">
            <label for="room_count">Room count</label>
            <input value="{{ @old('room_count') }}" name="room_count" type="number" class="form-control" id="room_count">
            @if ($errors->has('room_count'))
                <span class="text-danger">{{ $errors->first('room_count') }}</span>
            @endif
        </div>
        <!-- bed count -->
        <div class="form-group">
            <label for="bed_count">Bed count</label>
            <input value="{{ @old('bed_count') }}" name="bed_count" type="number" class="form-control" id="bed_count">
            @if ($errors->has('bed_count'))
                <span class="text-danger">{{ $errors->first('bed_count') }}</span>
            @endif
        </div>
        <!-- max person count -->
        <div class="form-group">
            <label for="max_person_count">Max person count</label>
            <input value="{{ @old('max_person_count') }}" name="max_person_count" type="number" class="form-control" id="max_person_count">
            @if ($errors->has('max_person_count'))
                <span class="text-danger">{{ $errors->first('max_person_count') }}</span>
            @endif
        </div>
        <!-- is available -->
        <div class="form-group">
            <label for="is_available">Is available</label>
            <select name="is_available" id="is_available">
                <option value="1">True</option>
                <option value="0">False</option>
            </select>

        </div>
        <!-- price per night -->
        <div class="form-group">
            <label for="price_per_night">Price per night</label>
            <input value="{{ @old('price_per_night') }}" name="price_per_night" type="number" class="form-control" id="price_per_night">
            @if ($errors->has('price_per_night'))
                <span class="text-danger">{{ $errors->first('price_per_night') }}</span>
            @endif
        </div>
        <!-- type id -->
        <div class="form-group">
            <label for="accommodation_type_id">Accommodation type id</label>
            <input value="{{ @old('accommodation_type_id') }}" name="accommodation_type_id" type="number" class="form-control" id="accommodation_type_id">
            @if ($errors->has('accommodation_type_id'))
                <span class="text-danger">{{ $errors->first('accommodation_type_id') }}</span>
            @endif
        </div>
        <!-- city id -->
        <div class="form-group">
            <label for="city_id">City id</label>
            <input value="{{ @old('city_id') }}" name="city_id" type="number" class="form-control" id="city_id">
            @if ($errors->has('city_id'))
                <span class="text-danger">{{ $errors->first('city_id') }}</span>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('accommodations.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection