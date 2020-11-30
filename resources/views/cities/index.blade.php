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
    @foreach ($cities as $city)
        <tr>
            <td>{{ $city->id}}</td>
            <td>{{ $city->name}}</td>
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        