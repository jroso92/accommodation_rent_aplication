@extends('layouts.app')

@section('content')
    <div>
        <h3>Contents</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $content->name }}</li>
        </ul>
        <a href="{{route('contents.index') }}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection
        