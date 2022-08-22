@extends('layouts.submain')

@section('title')
<title>{{ $title }}</title>
@endsection

@section('container')
<h1>Comment Page</h1>

<form action="/comment" method="post">
    @csrf
    <div class="mb-3">
        <label for="star" class="form-label">Star</label>
        <input type="number" class="form-control @error('star') is-invalid @enderror" name="star" id="star" required value="{{ old('star') }}">
        @error('star')
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