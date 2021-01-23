@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('reviews.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- review -->
        <div class="form-group">
            <label for="name">Review</label>
            <input value="{{ @old('review') }}" name="review" type="number" class="form-control" id="review">
            @if ($errors->has('review'))
                <span class="text-danger">{{ $errors->first('review') }}</span>
            @endif
        </div>
        <!-- accommodation id -->
        <div class="form-group">
            <label for="accommodation_id">Accommodation id</label>
            <input value="{{ @old('accommodation_id') }}" name="accommodation_id" type="number" class="form-control" id="accommodation_id">
            @if ($errors->has('accommodation_id'))
                <span class="text-danger">{{ $errors->first('accommodation_id') }}</span>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('reviews.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection