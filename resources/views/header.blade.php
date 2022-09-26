<?php
use App\Http\Controllers\ProductController;
$total=0;
if (Session()->has('user')) {
    $total = ProductController::cartItem();
}


?>

<nav class="navbar navbar-expand-lg bg-light" style="margin-bottom: 10px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>

        <li>
            <form action="/search" class="d-flex pull-left" style="float: left;" role="search">
                <input class="form-control me-2" name="query"  type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </li>
          <li>
            <a href="#">cart({{ $total }})</a>
           </li>



        <li class="nav-item dropdown">
            @if (Session()->has('user'))
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                {{ Session()->get('user')['name'] }}

            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="logout">Log Out</a></li>
            </ul>
            @else{
                <li><a class="dropdown-item" href="login">Log In</a></li>
            @endif
        </li>

      </ul>






    </div>

  </div>
</nav>
