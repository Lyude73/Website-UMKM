@extends('admin.layout')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('admin.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($product->image)
                <img src="{{ asset('storage/images/' . $product->image) }}" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
