@extends('layouts.submain')

@section('title')
<title>My Cart</title>
@endsection

@section('container')
<h2 class="mb-5 text-center">Keranjang</h2>

@if($carts->count())
<div class="table-responsive col-lg-10">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Qty</th>
            <th scope="col">Total</th>
            <th scope="col">Created_At</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $cart->product->name }}</td>
                    <td>{{ $cart->product->price }}</td>
                    <td>{{ $cart->qty }}</td>
                    <td>{{ $cart->qty * $cart->product->price }}</td>
                    <td>{{ $cart->created_at }}</td>
                    <td>
                        <form action="/dashboard/cart/ {{ $cart->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Are your sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
    <p class="text-center fs-4">No Cart found</p>
@endif

@endsection