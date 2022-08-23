@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">AsanArizona Users - Cart</h1>
</div>

<div class="table-responsive col-lg-9">
    <a href="/dashboard/users" class="btn btn-success">Back to Users</a>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Qty</th>
            <th scope="col">Created_At</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $cart->product->name }}</td>
                    <td>{{ $cart->qty }}</td>
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

@endsection