@extends('layouts.app')

@section('content')
    <a href="{{route('accommodation_types.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Address</th>
        <th scope="col">Room count</th>
        <th scope="col">Bed count</th>
        <th scope="col">Max person count</th>
        <th scope="col">Is available</th>
        <th scope="col">Price per night</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($accommodations as $accommodation)
        <tr>
            <td>{{ $accommodation->id}}</td>
            <td>{{ $accommodation->name}}</td>
            <td>{{ $accommodation->description}}</td>
            <td>{{ $accommodation->address}}</td>
            <td>{{ $accommodation->room_count}}</td>
            <td>{{ $accommodation->bed_count}}</td>
            <td>{{ $accommodation->max_person_count}}</td>
            <td>{{ $accommodation->is_available}}</td>
            <td>{{ $accommodation->price_per_night}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('accommodations.show', ['accommodation' => $accommodation->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('accommodations.edit', ['accommodation' => $accommodation->id]) }}">Edit</a>
            </td>
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        