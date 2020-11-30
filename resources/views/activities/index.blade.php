@extends('layouts.app')

@section('content')
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($activities as $activity)
        <tr>
            <td>{{ $activity->id}}</td>
            <td>{{ $activity->name}}</td>
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        