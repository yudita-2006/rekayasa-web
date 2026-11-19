
@extends('layout')

@section('content')
<h1>Transactions</h1>

<a href="{{ route('transactions.create') }}">Add Transaction</a>

<table border="1">
<tr>
    <th>Product</th>
    <th>Qty</th>
    <th>Aksi</th>
</tr>

@foreach($transactions as $t)
<tr>
    <td>{{ $t->product->name }}</td>
    <td>{{ $t->quantity }}</td>
    <td>
        <a href="{{ route('transactions.edit', $t->id) }}">Edit</a>
        <form action="{{ route('transactions.destroy', $t->id) }}"
        method="POST">
            @csrf @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach

</table>
@endsection
