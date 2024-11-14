@extends('layout')

@section('content')
<h1>Edit Product</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Name:</label>
    <input type="text" name="name" value="{{ $product->name }}" required>
    <br>
    <label>Quantity:</label>
    <input type="number" name="quantity" value="{{ $product->quantity }}" required>
    <br>
    <label>Price:</label>
    <input type="text" name="price" value="{{ $product->price }}" required>
    <br><br>
    <button type="submit">Update</button>
</form>
@endsection
