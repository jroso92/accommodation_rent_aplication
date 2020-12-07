@extends('layouts.app')

@section('content')
    <div>
        <h3>Activities</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $activity->name }}</li>
        </ul>
        <a href="{{route('activities.index') }}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
        