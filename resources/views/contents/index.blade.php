@extends('layouts.app')

@section('content')
    <a href="{{route('contents.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($contents as $content)
        <tr>
            <td>{{ $content->id}}</td>
            <td>{{ $content->name}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('contents.show', ['content' => $content->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('contents.edit', ['content' => $content->id]) }}">Edit</a>
            </td>
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        