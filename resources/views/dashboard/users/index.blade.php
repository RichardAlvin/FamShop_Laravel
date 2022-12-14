@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">AsanArizona Users</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-10">
    <a href="/dashboard/users/create" class="btn btn-primary">Add Users</a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Is_Admin</th>
            <th scope="col">Created_At</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    @if($user->is_admin)
                    <td>Yes</td>
                    @else
                    <td>No</td>
                    @endif
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a href="/dashboard/comments/{{ $user->id }}" class="badge bg-success">Comment</a>
                        <a href="/dashboard/carts/{{ $user->id }}" class="badge bg-primary">Carts</a>
                        <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning">Edit</a>
                        <form action="/dashboard/users/ {{ $user->id }}" method="post" class="d-inline">
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