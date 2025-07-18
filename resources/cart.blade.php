@extends('layouts.app')

@section('content')
<h2>Your Cart</h2>
<table class="table table-bordered">
    <tr>
        <th>Product</th><th>Quantity</th><th>Price</th>
    </tr>
    @foreach($items as $item)
    <tr>
        <td>{{ $item->product->name }}</td>
        <td>{{ $item->quantity }}</td>
        <td>₹{{ $item->product->price }}</td>
    </tr>
    @endforeach
</table>
@endsection
