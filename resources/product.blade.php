@extends('layouts.app')

@section('content')
<h2>{{ $product->name }}</h2>
<img src="{{ $product->image }}" width="300">
<p>{{ $product->description }}</p>
<p><strong>Price: ₹{{ $product->price }}</strong></p>
<a href="/add-to-cart/{{ $product->id }}" class="btn btn-success">Add to Cart</a>
@endsection
