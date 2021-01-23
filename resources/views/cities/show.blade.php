@extends('layouts.app')

@section('content')
    <div>
        <h3>Cities</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $city->name }}</li>
        </ul>
        <a href="{{route('cities.index') }}" class="btn btn-outline-primary">Back</a>
        <a class="btn btn-outline-primary" href="{{route('cities.edit', ['city' => $city->id]) }}">Edit</a>
        <form class="form-inline" action="{{ route('cities.destroy', ['city' => $city->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
        