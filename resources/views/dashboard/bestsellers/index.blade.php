@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">AsanArizona BestSeller Product</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="row">
    <div class="table-responsive col-lg-5">
        <h4>Product List</h4>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Detail</th>
                <th scope="col">BestSeller?</th>
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
                            <a href="/dashboard/bestsellers/{{ $product->id }}" class="badge bg-info">Detail</a>
                        </td>
                        <td>
                            <form method="post" action="/dashboard/bestsellers">
                                @method('put')
                                @csrf
                                <input type="hidden" id="type" name="type" value="add">
                                <input type="hidden" id="id" name="id" value="{{ $product->id }}">
                                <input type="checkbox" id="bestseller" name="bestseller" value="1">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-lg-1">
    </div>
    <div class="table-responsive col-lg-5">
        <h4>Best Seller Product List</h4>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Detail</th>
                <th scope="col">Remove</th>
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
                            <a href="/dashboard/bestsellers/{{ $product->id }}" class="badge bg-info">Detail</a>
                        </td>
                        <td>
                            <form method="post" action="/dashboard/bestsellers">
                                @method('put')
                                @csrf
                                <input type="hidden" id="type" name="type" value="remove">
                                <input type="hidden" id="id" name="id" value="{{ $product->id }}">
                                <input type="checkbox" id="bestseller" name="bestseller" value="1">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection