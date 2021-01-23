@extends('layouts.app')

@section('content')
    <div>
        <h3>Reviews</h3>
        <ul class="list-unstyled">
            <li>Review: {{ $review->review }}</li>
        </ul>
        <a href="{{route('reviews.index') }}" class="btn btn-outline-primary">Back</a>
        <a class="btn btn-outline-primary" href="{{route('reviews.edit', ['review' => $review->id]) }}">Edit</a>
        <form class="form-inline" action="{{ route('reviews.destroy', ['review' => $review->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
        