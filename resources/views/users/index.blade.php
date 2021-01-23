

@extends('layouts.app')

@php
$loggedInUser = \Auth::user();
@endphp

@section('content')
<a href="{{ route('users.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
<thead>
      <tr>
        <th>Id</th>
        <th>Name / Email</th>
        <th>County</th>
        <th>Role</th>
        <th>Last online</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users->items() as $user)
          <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}<br />{{ $user->email }}</td>
              <td>{{ $user->county->name ?? '' }}</td>
              <td>{{ $user->role->name }}</td>
              <td>{{ $user->last_online }}</td>
              <td>
                <a class="btn btn-outline-primary" href="{{ route('users.show', ['user' => $user->id]) }}">Details</a>
                <!-- admin svima mijenja password, korisnik samo sebi -->
                @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
                <a class="btn btn-outline-primary" href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
                <a class="btn btn-outline-primary" href="{{ route('change_password.edit', ['user' => $user->id]) }}">Change password</a>
                @endif

              </td>
          </tr>
      @endforeach
    </tbody>
</table>

@endsection


