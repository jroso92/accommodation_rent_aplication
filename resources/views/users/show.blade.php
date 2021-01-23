

@extends('layouts.app')

@php
$loggedInUser = \Auth::user();
@endphp

@section('content')
<div>
   <h3>User details</h3>
   <ul class="list-unstyled">
       <li>First name: {{ $user->name}}</li>
       <li>Email: {{ $user->email}}</li>
       <li>Last online: {{ $user->last_online}}</li>
       <li>County: {{ $user->county->name}}</li>
       <li>Role: {{ $user->role->name}}</li>
     </ul>


       <a href="{{ route('users.index') }}" class="btn btn-outline-primary">Back</a>
       <!-- admin svima mijenja password, korisnik samo sebi -->
       @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
       <a class="btn btn-outline-primary" href="{{route('users.edit',['user' => $user->id]) }}">Edit</a>
       <a class="btn btn-outline-primary" href="{{ route('change_password.edit', ['user' => $user->id]) }}">Change password</a>
       @endif

       <!-- admin svima deaktivira račun, korisnik može samo sebi -->
       @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
       <form class="form-inline" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
      </form>
      @endif

   </div>

@endsection