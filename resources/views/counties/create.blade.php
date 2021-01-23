@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('counties.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <!-- county name -->
        <div class="form-group">
            <label for="name">County name</label>
            <input value="{{ @old('name') }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('counties.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection