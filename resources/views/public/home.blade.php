@extends('layouts.public.layout') @section('content')
<div class="card mt-4 text-center">
    <div class="card-body">
        <h5 class="card-title">Users crud</h5>
        <p class="card-text">
            @guest We have {{ $usersCount }} users in our database.
            <a href="{{ url('/login') }}" title="login">Login</a>
            @endguest @auth @include('partials.public.user_card', ['user' =>
            Auth()->user()]) @endauth
        </p>
    </div>
</div>
@endsection
