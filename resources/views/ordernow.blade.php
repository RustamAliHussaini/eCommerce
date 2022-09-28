@extends('master')

@section('content')
<?php
use App\Http\Controllers\ProductController;
$sum = ProductController::cartItem();
?>
<div class="container">
    <div class="row col-md-6">
    <table class="table table-bordered" >
        <tr>
            <td>Number of items</td>
            <td>{{ $sum }}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{ $total }}</td>
        </tr>
        <tr>
            <td>Tax</td>
            <td>$ 10</td>
        </tr>
        <tr>
            <td>Total Price</td>
            <td>$ {{ $total+10 }}</td>
        </tr>
    </table>

    <form action="placeOrder" method="POST">
        @csrf
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <label for="PaymentMethod">Payment Method</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment_method" value="Online Payment" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Online Payement
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment_method" value="EMI" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          EMI Payement
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment_method" value="Pay on Delivery" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Pay On Delivery
        </label>
      </div>

      <button type="submit" class="btn btn-success">Place Order</button>
    </form>

    </div>



</div>


@endsection
