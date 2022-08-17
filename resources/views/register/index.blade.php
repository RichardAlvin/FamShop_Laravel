@extends('layouts.main')

@section('title')
<title>{{ $title }}</title>
@endsection

@section('container')
<div class="mb-3">
    <h3>Registration Form</h3>
</div>
<form action="/register" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required value="{{ old('email') }}">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="cpassword" class="form-label">Confirm Pass</label>
        <input type="password" class="form-control @error('cpassword') is-invalid @enderror" name="cpassword" id="cpassword" required>
        @error('cpassword')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <p>Already Have Account? <a href="/login">Login Now!</a></p>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection