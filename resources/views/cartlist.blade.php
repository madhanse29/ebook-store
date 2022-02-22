@extends('master')
@section('content')
<h3 class="text-center text-light">Cart List</h3>
<div class="row align-self-center">
<a class="btn btn-success " href="/ordernow"> Order now</a>
</div>
<div class="container mt-2">
    <div class="row justify-content-center">
    @csrf
@foreach($cartitems as $item)
<div class="col-xl-6 col-lg-6 col-md-12 ">
<div class="card mb-3" style="max-width:540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{$item->books->gallery}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$item->books->name}}</h5>
        <p class="card-text">{{$item->books->description}}</p>
        <p class="card-text">Category: {{$item->books->category}}</p>
        <p class="card-text"><small class="text-muted">Price: Rs.{{$item->books->price}}</small></p>
        <a class="btn btn-danger" href="/removecart/{{$item->cart_id}}">Remove from cart</a>
    </div>
  </div>
</div>
</div>
</div>
@endforeach
</div>
</div>
<div class="row align-self-center">
<a class="btn btn-success " href="/ordernow"> Order now</a>
</div>
<div class="row align-self-center mt-2">
<span >{{ $cartitems->links() }}</span>
</div>
@endsection 