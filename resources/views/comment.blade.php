@extends('layouts.submain')

@section('title')
<title>{{ $title }}</title>
@endsection

@section('container')
<h1>Comment Page</h1>

<form action="/comment" method="post">
    @csrf
    <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
    <div class="mb-3">
        <label for="stars" class="form-label">Star</label>
        <input type="number" class="form-control @error('stars') is-invalid @enderror" name="stars" id="stars" required value="{{ old('stars') }}">
        @error('stars')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <input type="text" class="form-control @error('message') is-invalid @enderror" name="message" id="message" required value="{{ old('message') }}">
        @error('message')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Send</button>
        <a href="/" class="btn btn-warning">Back to Home</a>
    </div>
</form>
@endsection