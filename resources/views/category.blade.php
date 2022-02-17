@extends('master')
@section('content')
<div class="container mt-2">
<h2 class="text-center text-light">{{$cat}}</h2>
    <div class="row justify-content-center">
    @csrf
@foreach($data as $item)
<div class="col-xl-6 col-lg-6 col-md-12 ">
<div class="card mb-3" style="max-width:540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <a href="/detail/{{$item->id}}">
      <img src="{{$item->gallery}}" class="img-fluid rounded-start" alt="..."></a>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$item->name}}</h5> 
        <p class="card-text">{{$item->description}}</p>
        <p class="card-text">Category: {{$item->category}}</p>
        <p class="card-text"><small class="text-muted">Price: Rs.{{$item->price}}</small></p>
    </div>
  </div>
</div>
</div>
</div>
@endforeach
</div>
</div>
@endsection 