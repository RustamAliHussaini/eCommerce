@extends('master')
@section("content")

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 col-sm-offset-4">

            <form action="/register" method="POST">
                <div class="mb-3">
                    @csrf
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    @csrf
                  <label for="exampleInputEmail1" class="form-label">User Name</label>
                  <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Register</button>
              </form>

        </div>
        <div class="col-sm-4"></div>
    </div>
</div>

@endsection