@extends('layouts.app')

@section('content')
    <a href="{{route('bookings.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Reserved at</th>
        <th scope="col">Reserved until</th>
        <th scope="col">Adult no</th>
        <th scope="col">Child no</th>
        <th scope="col">Price</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($bookings as $booking)
        <tr>
            <td>{{ $booking->id}}</td>
            <td>{{ $booking->reserved_at}}</td>
            <td>{{ $booking->reserved_until}}</td>
            <td>{{ $booking->adult_no}}</td>
            <td>{{ $booking->child_no}}</td>
            <td>{{ $booking->price}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('bookings.show', ['booking' => $booking->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('bookings.edit', ['booking' => $booking->id]) }}">Edit</a>
            </td>
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        