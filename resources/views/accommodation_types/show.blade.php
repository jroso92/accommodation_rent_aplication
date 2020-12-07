@extends('layouts.app')

@section('content')
    <div>
        <h3>Accommodation type detail</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $accommodation_type->name }}</li>
        </ul>
        <a href="{{route('accommodation_types.index') }}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
        