
@extends('layout')

@section('content')
<h1>Stocks</h1>

<a href="{{ route('stocks.create') }}">Add Stock</a>

<table border="1">
<tr>
    <th>Product</th>
    <th>Type</th>
    <th>Quantity</th>
    <th>Aksi</th>
</tr>

@foreach($stocks as $stock)
<tr>
    <td>{{ $stock->product->name }}</td>
    <td>{{ $stock->type }}</td>
    <td>{{ $stock->quantity }}</td>
    <td>
        <a href="{{ route('stocks.edit', $stock->id) }}">Edit</a>
        <form action="{{ route('stocks.destroy', $stock->id) }}"
        method="POST">
            @csrf @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach

</table>
@endsection
