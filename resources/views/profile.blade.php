@extends('master')
@section('content')
<div class="container text-dark">
<div class="row">
        <div class="card col-3 mt-5 align-items-center justify-content-center custom-card" > <!----col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-5 -->
  <img src="storage/uploads/avatars/{{$data->avatar}}" class="card-img-top card-img"  alt="">
  <div class="card-body">
    <h5 class="card-title text-center mt-3">Hi {{$data->name}}</h5>
    <h6 class="card-text text-center">{{$data->email}}</h6><br>
   
    
<form enctype="multipart/form-data" action="/profile" method="POST">
        @csrf
        <div class="mb-3">
  <label for="formFileSm" class="form-label text-muted">For Profile Picture edit .</label>
  <input class="form-control form-control-sm mt-2" name="avatar" id="formFileSm" type="file">
</div>
<button type="submit" class="btn btn-success" style="position:relative; left:50px" >Edit pic</button>
    </form>
  </div>
</div>


<div class="card col-8 offset-1 mt-5 " style="padding: 60px;"> <!--col-xl-4 col-lg-6 col-md-6 col-sm-12 mt-5-->
<form action="edituser" method="POST">
    @csrf 
    @method('PUT')
      <h2 class="text-center">Profile settings</h2>
  <div class="mb-3" >
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" name="name" aria-describedby="emailHelp" value="{{$data->name}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" value="{{$data->email}}" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" value="{{$data->password}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

@endsection

<!-- <form enctype="multipart/form-data"action="/profile" method="POST">
        @csrf
        <input type="file" name="avatar">
        <input type="submit" class="pull-right btn btn-primary btn-sm" name="avatar">
    </form> -->