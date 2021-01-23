@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('cities.update', ['city' => $city->id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

        <!-- city name -->
        <div class="form-group">
            <label for="name">City name</label>
            <input value="{{ $city->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <!-- county id -->
        <div class="form-group">
            <label for="county_id">County id</label>
            {{ Form::select('county_id', $counties, $city->county_id, ['class' => 'form-control', 'id' => 'county'])}}
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('cities.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection