@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add New Product</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/products">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select" name="type">
                <option value="electronik">Elektronik</option>
                <option value="perabotan">Perabotan</option>
                <option value="lampu">Lampu</option>
                <option value="karpet">Karpet</option>
                <option value="kosmetik">Kosmetik</option>
                <option value="Perkakas">Perkakas</option>
            </select>
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" required value="{{ old('stock') }}">
            @error('stock')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            @error('desc')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
            <input id="desc" type="hidden" name="desc" value="{{ old('desc') }}">
            <trix-editor input="desc"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

{{-- <script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script> --}}
@endsection