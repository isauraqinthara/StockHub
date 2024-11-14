@extends('layout')

@section('content')
<h1>Add New Product</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required>
    <br>
    <label>Quantity:</label>
    <input type="number" name="quantity" required>
    <br>
    <label>Price:</label>
    <input type="text" name="price" required>
    <br><br>
    <button type="submit">Save</button>
</form>
@endsection
