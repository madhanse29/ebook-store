@extends('master')
@section('content')
<div class="container custom-login text-light" height="200px">
<div class="row">
    <div class="col-sm-4 mx-auto">
    <form action="login" method="POST">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" name="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" minlength="6" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary ">Login</button>
</form>
    </div>
</div>
</div>
@endsection