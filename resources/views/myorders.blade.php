@extends('master')

@section('content')

<div class="container">
    <h1 style="text-align: center">My Orders</h1>

    <div class="row">

        @foreach ($orders as $item )
        <div class="col-sm-2 cart_item"></div>
        <div class="col-sm-2 cart_item" style="float: right;" >

           <img class="cart-img" src="{{ $item->gallery }}" alt="">


        </div>
        <div class="col-sm-4 cart_item">


            <h5>Name:{{ $item->name }}</h5>
            <h5>Delivery Status : {{ $item->status }}</h5>
            <h5>Payment Method : {{ $item->payment_method }}</h5>
            <h5>Payment Status : {{ $item->payment_status }}</h5>
            <h5>Address : {{ $item->address }}</h5>


         </div>
         <div class="col-sm-4 cart_item">

         </div>
        @endforeach
    </div>
</div>


@endsection
