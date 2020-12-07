@extends('layouts.app')

@section('content')
    <a href="{{route('accommodation_types.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($accommodation_types as $accommodation_type)
        <tr>
            <td>{{ $accommodation_type->id}}</td>
            <td>{{ $accommodation_type->name}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('accommodation_types.show', ['accommodation_type' => $accommodation_type->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('accommodation_types.edit', ['accommodation_type' => $accommodation_type->id]) }}">Edit</a>
            </td>
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        