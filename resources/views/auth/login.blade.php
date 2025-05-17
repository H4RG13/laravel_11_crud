@extends('layouts.app')
@push('styles')
<style>
    .auth-card { max-width: 400px; margin: 60px auto; }
    .auth-logo { font-size: 2.5rem; color: #0d6efd; margin-bottom: 1rem; text-align: center; }
</style>
@endpush
@section('content')
<div class="auth-card card shadow-sm border-0">
    <div class="card-body p-4">
        <div class="auth-logo">
            <i class="bi bi-person-circle"></i>
        </div>
        <h4 class="mb-4 text-center">Login</h4>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary w-100 fw-bold"><i class="bi bi-box-arrow-in-right"></i> Login</button>
        </form>
        <div class="mt-3 text-center">
            <p class="mb-0">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
        </div>
    </div>
</div>
@endsection 