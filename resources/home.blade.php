@extends('layouts.app')

@section('content')
<h1>Products</h1>
<div class="row">
    @foreach($products as $product)
    <div class="col-md-4">
        <div class="card mb-4">
            <img src="{{ $product->image }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5>{{ $product->name }}</h5>
                <p>₹{{ $product->price }}</p>
                <a href="/product/{{ $product->id }}" class="btn btn-primary">View</a>
                <a href="/add-to-cart/{{ $product->id }}" class="btn btn-success">Add to Cart</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
