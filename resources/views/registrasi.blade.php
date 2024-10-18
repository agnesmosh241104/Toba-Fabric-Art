@extends('layout')
@section('title', 'registrasi')
@section('content')

<div class="container mt-5">
    @if(session('errors'))
        <div class="col-12">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach 
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
 
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert"> 
            {{ session('success') }}
        </div>
    @endif
</div>

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card p-4" style="width:500px; border-radius: 50px;",>
        <div class="text-center">
            <img src="img/logo.jpg" alt="logo" width="300">
            <h2 class="mt-3">Sign Up</h2>
            <p>Create your account.</p>
        </div>
        <form action="{{route('registrasi')}}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="terms" required>
                <label class="form-check-label" for="terms">I agree with the terms of use</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </form>
        <div class="text-center mt-3">
            <p>Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
        </div>
    </div>
</div>

@endsection
