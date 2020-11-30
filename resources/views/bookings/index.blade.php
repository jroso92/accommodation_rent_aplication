@extends('layouts.app')

@section('content')
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Reserved at</th>
        <th scope="col">Reserved until</th>
        <th scope="col">Adult no</th>
        <th scope="col">Child no</th>
        <th scope="col">Price</th>
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
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        