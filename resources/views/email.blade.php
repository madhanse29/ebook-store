@extends('master')
@section('content')
<div class="container justify-content-center align-items-center" style="height:100vh;">
<div class="card mx-auto mt-5 " style="width: 18rem;">
<div class="card-body">
<form action="/forgot" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter your Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div> </div> </div>
@endsection