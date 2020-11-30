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
    @foreach ($counties as $county)
        <tr>
            <td>{{ $county->id}}</td>
            <td>{{ $county->name}}</td>
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        