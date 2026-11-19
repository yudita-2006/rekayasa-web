
@extends('layout')

@section('content')
<h1>Add Stock</h1>

<form action="{{ route('stocks.store') }}" method="POST">
    @csrf

    <label>Product</label><br>
    <select name="id_products">
        @foreach($products as $product)
            <option value="{{ $product->id }}">
                {{ $product->name }}
            </option>
        @endforeach
    </select><br><br>

    <label>Type</label><br>
    <select name="type">
        <option value="masuk">Masuk</option>
        <option value="keluar">Keluar</option>
    </select><br><br>

    <label>Quantity</label><br>
    <input type="number" name="quantity"><br><br>

    <button type="submit">Save</button>
</form>

<a href="{{ route('stocks.index') }}">Back</a>
@endsection
