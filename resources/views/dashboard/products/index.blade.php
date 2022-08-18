@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post</h1>
</div>

<table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Stock</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="/dashboard/products/{{ $product->id }}" class="badge bg-info">Detail</a>
                    <a href="/dashboard/products/{{ $product->id }}" class="badge bg-warning">Edit</a>
                    <a href="/dashboard/products/{{ $product->id }}" class="badge bg-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection