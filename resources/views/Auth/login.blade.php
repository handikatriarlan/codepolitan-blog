@extends('layouts.app')

@section('title', 'Login')

@section('content')

<main class="form-signin text-center" style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 53vh;">
    <form method="POST" action="{{ url('login') }}" style="width: 100%; max-width: 330px;">
        @csrf
        <h1 class="h3 mb-5 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mt-2">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="btn btn-primary w-100 mt-3" type="submit">Sign in</button>
    </form>
</main>

@endsection