@extends('layouts.submain')

@section('title')
<title>{{ $title }}</title>
@endsection

@section('container')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="div center">
    <form action="/login" method="post">
        @csrf
        <div class="mb-3">
            <h3>Login Form</h3>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus required>
          @error('email')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
          @error('password')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
            <p>Not Registered? <a href="/register">Register Now!</a></p>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection

