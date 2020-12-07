@extends('layouts.app')

@section('content')
    <div>
        <h3>Counties</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $county->name }}</li>
        </ul>
        <a href="{{route('counties.index') }}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
        