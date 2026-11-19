
@extends('layout')

@section('content')
<h1>Add Transaction</h1>

<form action="{{ route('transactions.store') }}" method="POST">
    @csrf

    <label>Product</label><br>
    <select name="id_products">
        @foreach($products as $product)
            <option value="{{ $product->id }}">
                {{ $product->name }}
            </option>
        @endforeach
    </select><br><br>

    <label>Quantity</label><br>
    <input type="number" name="quantity"><br><br>

    <label>Total Price</label><br>
    <input type="number" name="total_price"><br><br>

    <button type="submit">Save</button>
</form>

<a href="{{ route('transactions.index') }}">Back</a>
@endsection
