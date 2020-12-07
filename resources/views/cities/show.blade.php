@extends('layouts.app')

@section('content')
    <div>
        <h3>Cities</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $city->name }}</li>
        </ul>
        <a href="{{route('cities.index') }}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
        