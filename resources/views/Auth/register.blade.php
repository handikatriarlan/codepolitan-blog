@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <main class="form-signin text-center"
        style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 53vh;">
        <form method="POST" action="{{ url('register') }}" style="width: 100%; max-width: 330px;">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Register</h1>
            @if (session()->has('error_message'))
                <div class="alert alert-danger">
                    {{ session()->get('error_message') }}
                </div>
            @endif
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                <label for="name">Your Name</label>
            </div>
            <div class="form-floating mt-2">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
                <label for="password">Password</label>
            </div>
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation">
                <label for="password_confirmation">Confirm Password</label>
            </div>
            <button class="btn btn-primary w-100 mt-3" type="submit">Register</button>
        </form>
    </main>

@endsection
