@extends('layouts.app')

@section('content')
    <div>
        <h3>Counties</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $county->name }}</li>
        </ul>
        <a href="{{route('counties.index') }}" class="btn btn-outline-primary">Back</a>
        <a class="btn btn-outline-primary" href="{{route('counties.edit', ['county' => $county->id]) }}">Edit</a>
        <form class="form-inline" action="{{ route('counties.destroy', ['county' => $county->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
        