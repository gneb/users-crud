@extends('layouts.public.layout') @section('content')
<div class="row">
    <div class="col-12 col-md-6 mx-auto">
        <div class="card mt-4 text-center">
            <div class="card-body">
                <h5 class="card-title">Login</h5>
                <form method="POST" action="/login">
                    @csrf
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            name="username"
                            class="form-control"
                            id="floatingInput"
                            placeholder="name@example.com"
                        />
                        <label for="floatingInput">Username</label>
                        @if($errors->has('username'))
                        <div class="text-danger">
                            {{ $errors->first('username') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-floating">
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            id="floatingPassword"
                            placeholder="Password"
                        />
                        <label for="floatingPassword">Password</label>
                        @if($errors->has('password'))
                        <div class="text-danger">
                            {{ $errors->first('password') }}
                        </div>
                        @endif
                    </div>
                    <input
                        class="btn btn-primary mt-2"
                        type="submit"
                        value="Login"
                    />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
