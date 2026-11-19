
@extends('layout')

@section('content')
<h1>Edit Stock</h1>

<form action="{{ route('stocks.update', $stock->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Product</label><br>
    <select name="id_products">
        @foreach($products as $product)
            <option value="{{ $product->id }}"
                {{ $stock->id_products == $product->id ? 'selected' : '' }}>
                {{ $product->name }}
            </option>
        @endforeach
    </select><br><br>

    <label>Type</label><br>
    <select name="type">
        <option value="masuk" {{ $stock->type == 'masuk' ? 'selected' : '' }}>Masuk</option>
        <option value="keluar" {{ $stock->type == 'keluar' ? 'selected' : '' }}>Keluar</option>
    </select><br><br>

    <label>Quantity</label><br>
    <input type="number" name="quantity" value="{{ $stock->quantity }}"><br><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('stocks.index') }}">Back</a>
@endsection
