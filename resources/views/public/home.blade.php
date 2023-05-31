@extends('layouts.public.layout') @section('content')
<div class="card mt-4 text-center">
    <div class="card-body">
        <h5 class="card-title">Users crud</h5>
        <p class="card-text">
            We have 25 users in our database.
            <a href="{{ url('/login') }}" title="login">Login</a> to manage
        </p>
    </div>
</div>
@endsection
