@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $product->name }}</h1>

            <a href="/dashboard/products" class="btn btn-success">Back to Products</a>
            <hr>
            <p>Created at {{ $product->created_at }}</p>
            <p>Type: {{ $product->type }}</p>

            <img src="https://source.unsplash.com/1200x400" class="img-fluid">

            <p class="my-3 fs-5">{{ $product->desc }}</p>
        </div>
    </div>
</div>

@endsection