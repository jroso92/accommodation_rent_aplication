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
    @foreach ($accommodation_types as $accommodation_type)
        <tr>
            <td>{{ $accommodation_type->id}}</td>
            <td>{{ $accommodation_type->name}}</td>
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        