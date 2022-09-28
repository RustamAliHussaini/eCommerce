@extends('master')

@section('content')

<div class="container">
    <h1 style="text-align: center">Cart Items</h1>
    <h1 style="text-align: center">  <a href="orderNow" class="btn btn-info" style="text-align:center">Order Now</a></h1>

    <div class="row">

        @foreach ($products as $item )
        <div class="col-sm-2 cart_item"></div>
        <div class="col-sm-2 cart_item" style="float: right;" >

           <img class="cart-img" src="{{ $item->gallery }}" alt="">


        </div>
        <div class="col-sm-4 cart_item">


            <h3>Name:{{ $item->name }}</h3>
            <p>Description: {{ $item->description }}</p>

         </div>
         <div class="col-sm-4 cart_item">
            <a class="btn btn-danger" href="remove/{{ $item->cart_id }}">Remove</a>

         </div>
        @endforeach
    </div>
</div>


@endsection
