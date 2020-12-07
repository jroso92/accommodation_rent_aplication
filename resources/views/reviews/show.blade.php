@extends('layouts.app')

@section('content')
    <div>
        <h3>Reviews</h3>
        <ul class="list-unstyled">
            <li>Review: {{ $review->review }}</li>
        </ul>
        <a href="{{route('reviews.index') }}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
        