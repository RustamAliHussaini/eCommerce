<?php
use App\Http\Controllers\ProductController;
$total=0;
if (Session()->has('user')) {
    $total = ProductController::cartItem();
}


?>

<nav class="navbar navbar-expand-lg bg-light" style="margin-bottom: 10px;">
  <div class="container">
    <a class="navbar-brand" href="product">Smart Friqi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse header-nav" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="product">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/myorders">My Orders</a>
          </li>

        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>

        <li>
            <form action="/search" class="d-flex pull-left" style="float: left;" role="search">
                <input class="form-control me-2" name="query"  type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
          </li>
          <li>
            <a style="text-decoration:none; padding: 10px;" href="cartlist">cart({{ $total }})</a>
           </li>



        <li class="nav-item dropdown">
            @if (Session()->has('user'))
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                {{ Session()->get('user')['name'] }}

            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="logout">Log Out</a></li>
            </ul>
            @else
                <li style="padding: 10px;"><a class="dropdown-item" href="login">Log In</a></li>
                <li style="padding: 10px;"><a class="dropdown-item" href="register">Register</a></li>
            @endif
        </li>

      </ul>






    </div>

  </div>
</nav>
