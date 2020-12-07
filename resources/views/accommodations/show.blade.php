@extends('layouts.app')

@section('content')
    <div>
        <h3>Accommodation detail</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $accommodation->name }}</li>
            <li>Description: {{ $accommodation->description }}</li>
            <li>Address: {{ $accommodation->address }}</li>
            <li>Room count: {{ $accommodation->room_count }}</li>
            <li>Bed count: {{ $accommodation->bed_count }}</li>
            <li>Max person count: {{ $accommodation->max_person_count }}</li>
            <li>Is available: {{ $accommodation->is_available }}</li>
            <li>Price per night: {{ $accommodation->price_per_night }}</li>

        </ul>
        <a href="{{route('accommodations.index') }}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
        