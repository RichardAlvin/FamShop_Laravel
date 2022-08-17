@extends('layouts.main')

@section('title')
<title>{{ $title }}</title>
@endsection

@section('container')
<h2>Produk Barang</h2>

<div class="row">
    @foreach ($products as $product)
    <div class="col-md-3">
        <div class="card" style="width: 18rem;">
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


@endsection