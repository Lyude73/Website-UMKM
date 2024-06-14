@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Product</h1>
    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select" id="type" name="type" required>
                <option value="food">Food</option>
                <option value="drink">Drink</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
