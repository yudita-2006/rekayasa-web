
@extends('layout')

@section('content')
<h1>Products</h1>

<a href="{{ route('products.create') }}">Add Product</a>

<table border="1">
<tr>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Aksi</th>
</tr>

@foreach($products as $item)
<tr>
    <td>{{ $item->name }}</td>
    <td>{{ $item->description }}</td>
    <td>{{ $item->price }}</td>
    <td>
        <a href="{{ route('products.edit', $item->id) }}">Edit</a>
        <form action="{{ route('products.destroy', $item->id) }}"
        method="POST">
            @csrf @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach

</table>
@endsection
