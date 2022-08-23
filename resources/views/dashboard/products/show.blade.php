@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $product->name }}</h1>

            @if ($temp == "bestseller")
                <a href="/dashboard/bestsellers" class="btn btn-success">Back</a>
            @else
                <a href="/dashboard/products" class="btn btn-success">Back to Product</a>
            @endif
            <hr>
            <p>Created at {{ $product->created_at }}</p>
            <p>Type: {{ $product->type }}</p>

            @if ($product->image)
                <div>
                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->type }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400" class="img-fluid">
            @endif

            <p class="my-3 fs-5">{{ $product->desc }}</p>
        </div>
    </div>
</div>

@endsection