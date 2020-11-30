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
    @foreach ($contents as $content)
        <tr>
            <td>{{ $content->id}}</td>
            <td>{{ $content->name}}</td>
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        