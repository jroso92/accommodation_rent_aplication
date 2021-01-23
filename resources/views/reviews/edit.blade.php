@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('reviews.update', ['review' => $review->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- review -->
        <div class="form-group">
            <label for="name">Review</label>
            <input value="{{ $review->review }}" name="review" type="number" class="form-control" id="review">
            @if ($errors->has('review'))
                <span class="text-danger">{{ $errors->first('review') }}</span>
            @endif
        </div>
        <!-- accommodation id -->
        <div class="form-group">
            <label for="accommodation_id">Accommodation id</label>
            {{ Form::select('accommodation_id', $accommodations, $review->accommodation_id, ['class' => 'form-control', 'id' => 'accommodation'])}}
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('reviews.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection