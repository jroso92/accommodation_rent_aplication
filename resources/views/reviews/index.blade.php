@extends('layouts.app')

@section('content')
    <a href="{{route('reviews.create') }}" class="btn btn-primary mt-5">Add</a>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Review</th>
        <th scope="col">Accommodation name</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($reviews as $review)
        <tr>
            <td>{{ $review->id}}</td>
            <td>{{ $review->review}}</td>
            <td>{{ $review->accommodation->name ?? ''}}</td>
            <td>
            <a class="btn btn-outline-primary" href="{{route('reviews.show', ['review' => $review->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('reviews.edit', ['review' => $review->id]) }}">Edit</a>
            </td>
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        