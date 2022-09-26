@extends('master')
@section('content')

<div class="cantainer">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ $product['gallery'] }}" alt="">;
        </div>
        <div class="col-sm-6">
            <a href="/product">Go Back</a>
            <h2>Name: {{ $product['name'] }}</h2>
            <h3>Price: {{ $product['price'] }}</h3>
            <h4>Details: {{ $product['description'] }}</h4>
            <br><br>
            <form action="/adToCart" method="POST">
                @csrf
                <input type="hidden" class="hidden" name="product_id" value="{{ $product['id'] }}">
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><br>

            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>


@endsection
