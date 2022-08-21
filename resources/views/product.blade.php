@extends('layouts.main')

@section('title')
<title>{{ $title }}</title>
@endsection

@section('container')
<h2 class="mb-5 text-center">Produk Barang</h2>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/product">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value={{ request('search') }}>
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="d-flex justify-content-end">
    {{ $products->links() }}
</div>

@if($products->count())
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/400x400/random" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->desc }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $product->stock }}</li>
                    <li class="list-group-item">{{ $product->price }}</li>
                    <li class="list-group-item">{{ $product->last_update }}</li>
                </ul>
            </div>
        </div>
        @endforeach
    </div>
@else
    <p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-end">
    {{ $products->links() }}
</div>

@endsection