
@extends('layout')

@section('content')
<h1>Add Product</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <label>Name</label><br>
    <input type="text" name="name"><br><br>

    <label>Description</label><br>
    <textarea name="description"></textarea><br><br>

    <label>Price</label><br>
    <input type="number" name="price"><br><br>

    <button type="submit">Save</button>
</form>

<a href="{{ route('products.index') }}">Back</a>
@endsection
