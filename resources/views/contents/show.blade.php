@extends('layouts.app')

@section('content')
    <div>
        <h3>Contents</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $content->name }}</li>
        </ul>
        <a href="{{route('contents.index') }}" class="btn btn-outline-primary">Back</a>
        <a class="btn btn-outline-primary" href="{{route('contents.edit', ['content' => $content->id]) }}">Edit</a>
        <form class="form-inline" action="{{ route('contents.destroy', ['content' => $content->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
        