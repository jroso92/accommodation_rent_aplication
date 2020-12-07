@extends('layouts.app')

@section('content')
    <a href="{{route('counties.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($counties as $county)
        <tr>
            <td>{{ $county->id}}</td>
            <td>{{ $county->name}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('counties.show', ['county' => $county->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('counties.edit', ['county' => $county->id]) }}">Edit</a>
            </td>
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        