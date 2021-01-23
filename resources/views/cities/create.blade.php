@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('cities.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- city name -->
        <div class="form-group">
            <label for="name">City name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <!-- county id -->
        <div class="form-group">
            <label for="county_id">County id</label>
            <input value="{{ @old('county_id') }}" name="county_id" type="number" class="form-control" id="county_id">
            @if ($errors->has('county_id'))
                <span class="text-danger">{{ $errors->first('county_id') }}</span>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('cities.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection