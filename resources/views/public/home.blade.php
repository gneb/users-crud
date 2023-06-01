@extends('layouts.public.layout') @section('content')
<div class="card mt-4 text-center">
    <div class="card-body">
        <h5 class="card-title">Users crud</h5>
        <p class="card-text">
            @guest We have 25 users in our database.
            <a href="{{ url('/login') }}" title="login">Login</a>
            @endguest @auth 
            <ol class="list-group list-group-numbered">
                <li class="list-group-item border-0">
                    First name: <b>{{Auth::user()->first_name}}</b>
                </li>
                <li class="list-group-item border-0">
                    Last name: <b>{{Auth::user()->last_name}}</b>
                </li>
                <li class="list-group-item border-0">
                    Username: <b>{{Auth::user()->username}}</b>
                </li>
                <li class="list-group-item border-0">
                    Age: <b>{{Auth::user()->age}}</b>
                </li>
            </ol>
            @endauth
        </p>
    </div>
</div>
@endsection
