@extends('layouts.app')

@section('content')
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Review</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($reviews as $review)
        <tr>
            <td>{{ $review->id}}</td>
            <td>{{ $review->review}}</td>
        </tr>
    @endforeach 
    </tbody>
    </table>
@endsection
        