@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">AsanArizona Users - Comment</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-9">
    <a href="/dashboard/users" class="btn btn-success">Back to Users</a>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Message</th>
            <th scope="col">Star</th>
            <th scope="col">Created_At</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $comment->message }}</td>
                    <td>{{ $comment->stars }}</td>
                    <td>{{ $comment->created_at }}</td>
                    <td>
                        <form action="/dashboard/comments/ {{ $comment->id }}" method="post" class="d-inline">
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