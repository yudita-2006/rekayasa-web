
@extends('layout')

@section('content')
<h1>Edit Transaction</h1>

<form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Product</label><br>
    <select name="id_products">
        @foreach($products as $product)
            <option value="{{ $product->id }}"
                {{ $transaction->id_products == $product->id ? 'selected' : '' }}>
                {{ $product->name }}
            </option>
        @endforeach
    </select><br><br>

    <label>Quantity</label><br>
    <input type="number" name="quantity" value="{{ $transaction->quantity }}"><br><br>

    <label>Total Price</label><br>
    <input type="number" name="total_price" value="{{ $transaction->total_price }}"><br><br>

    <button type="submit">Update</button>
</form>

<a href="{{ route('transactions.index') }}">Back</a>
@endsection
