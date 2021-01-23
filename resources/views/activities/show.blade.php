@extends('layouts.app')

@section('content')
    <div>
        <h3>Activities</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $activity->name }}</li>
        </ul>
        <a href="{{route('activities.index') }}" class="btn btn-outline-primary">Back</a>
        <a class="btn btn-outline-primary" href="{{route('activities.edit', ['activity' => $activity->id]) }}">Edit</a>
        <form class="form-inline" action="{{ route('activities.destroy', ['activity' => $activity->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
        