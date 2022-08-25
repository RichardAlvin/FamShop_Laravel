@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">AsanArizona Sales</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-10">
    <a href="/dashboard/sales/create" class="btn btn-primary">Add Sales</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Category</th>
                <th scope="col">Phone</th>
                <th scope="col">Company</th>
                <th scope="col">Created_At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($saleses as $sales)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $sales->name }}</td>
                <td><img src="{{ asset('storage/'.$sales->image) }}" height=100 width=100/></td>
                <td>{{ $sales->category }}</td>
                <td>{{ $sales->phone }}</td>
                <td>{{ $sales->company }}</td>
                <td>{{ $sales->created_at }}</td>
                <td>
                    <a href="/dashboard/sales/{{ $sales->id }}" class="badge bg-success">Nota</a>
                    <a href="/dashboard/sales/{{ $sales->id }}/edit" class="badge bg-warning">Edit</a>
                    <form method="post" action="/dashboard/sales/{{$sales->id}}" class="d-inline">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="image" value={{ $sales->image }}>
                        <input type="hidden" name="id" value={{ $sales->id }}>
                        <button class="badge bg-danger border-0" onclick="return confirm('Are your sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection