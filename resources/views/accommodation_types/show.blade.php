@extends('layouts.app')

@section('content')
    <div>
        <h3>Accommodation type detail</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $accommodation_type->name }}</li>
        </ul>
        <a href="{{route('accommodation_types.index') }}" class="btn btn-outline-primary">Back</a>
        <a class="btn btn-outline-primary" href="{{route('accommodation_types.edit', ['accommodation_type' => $accommodation_type->id]) }}">Edit</a>
        <form class="form-inline" action="{{ route('accommodation_types.destroy', ['accommodation_type' => $accommodation_type->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
        