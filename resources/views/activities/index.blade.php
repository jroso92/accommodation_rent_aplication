@extends('layouts.app')

@section('content')
    <a href="{{route('activities.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($activities as $activity)
        <tr>
            <td>{{ $activity->id}}</td>
            <td>{{ $activity->name}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('activities.show', ['activity' => $activity->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('activities.edit', ['activity' => $activity->id]) }}">Edit</a>
            </td>
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        