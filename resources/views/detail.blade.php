@extends('master')
@section('content')
<div class="container custom-detail">
<div class="row justify-content-around">
    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
<img class='img-thumbnail mt-4' src="{{$data['gallery']}}" alt="">
<form class="mt-3" action="/add_to_cart" method="POST">
    @csrf
    <input type="hidden" name="book_id" value={{$data['id']}}>
    <button class="btn btn-warning">Add to cart</button>
</form>
<br>
<button class="btn btn-success">Buy now</button>
<br> 
    </div>
    
    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
<a href="/" class="text-warning">Go Back</a>
<br><br>
<h2 class="text-light">{{$data['name']}}</h2>
<h3>Price:Rs.{{$data['price']}}</h3>
<h4>Details: {{$data['description']}}</h4>
<h4>Category: {{$data['category']}}</h4>
<p>Summary: {{$data['summary']}}</p>
<br>

    </div>
</div>
</div>
@endsection