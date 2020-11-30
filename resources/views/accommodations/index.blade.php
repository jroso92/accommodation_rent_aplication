@extends('layouts.app')

@section('content')
    <table class="table table-striped">
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
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        