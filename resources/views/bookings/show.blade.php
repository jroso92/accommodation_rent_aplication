@extends('layouts.app')

@section('content')
    <div>
        <h3>Bookings</h3>
        <ul class="list-unstyled">
            <li>Reserved at: {{ $booking->reserved_at }}</li>
            <li>Reserved until: {{ $booking->reserved_until }}</li>
            <li>Adult no: {{ $booking->adult_no }}</li>
            <li>Child no: {{ $booking->child_no }}</li>
            <li>Price: {{ $booking->price }}</li>
        </ul>
        <a href="{{route('bookings.index') }}" class="btn btn-outline-primary">Back</a>
        <a class="btn btn-outline-primary" href="{{route('bookings.edit', ['booking' => $booking->id]) }}">Edit</a>
        <form class="form-inline" action="{{ route('bookings.destroy', ['booking' => $booking->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
        