@extends('admin.layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Food Products</h1>
        <a href="{{ route('admin.create') }}" class="btn btn-primary">Add Food Product</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($foodProducts as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if($product->image)
                            <img src="{{ asset('storage/images/' . $product->image) }}" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.delete', $product->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Drink Products</h1>
        <a href="{{ route('admin.create') }}" class="btn btn-primary">Add Drink Product</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($drinkProducts as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if($product->image)
                            <img src="{{ asset('storage/images/' . $product->image) }}" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.delete', $product->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
