
@extends('master')
@section('content')
<div class="container sorting">
<div class="col-sm-4 mt-1 align-self-end">
<form class="d-flex" action="/search">
        <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark text-light" type="submit">Search</button>
      </form></div>
      <div class="dropdown mt-1 " style="position: absolute; left: 80vw;">
  <a class="btn btn-outline-dark text-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
   Sort by 
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="font-sort" href="{{ URL::current() }}">All</a></li>
    <li><a class="font-sort" href="{{ URL::current()."?sort=price_asc" }}.">Price-low to high</a></li>
    <li><a class="font-sort" href="{{ URL::current()."?sort=price_desc" }}.">Price-high to low</a></li>
 <li><a class="font-sort" href="{{ URL::current()."?sort=newest" }}.">Newest</a></li> 
 <li><a class="font-sort" href="{{ URL::current()."?sort=oldest" }}">Oldest</a></li>
</ul>
</div>
</div>
<div class="center container">
@foreach($books as $item)
<div class="dd" style="margin-right:10px;;margin-top:10px;margin-bottom:10px; padding:5px;">
    <!-- <img src="" style="width: 50px;px;height: 50px;"> -->
    <a href="detail/{{$item->id}}">
    <img src="{{$item->gallery}}" class="img-thumbnail zoom"style="width: 272px;
    height: 361px;background-color:black; border-color:black;"></a>
  </div>
  @endforeach
</div>
<div class="container mt-1">
    <div class="row justify-content-around">
@foreach($books as $item)
<div class="card m-2 col-sm-8 bg-dark text-light" style="width: 25rem;">
<a href="detail/{{$item->id}}">
  <img src="{{$item->gallery}}" class="card-img-top mt-2 img-thumbnail" style="height:30rem width:30rem " alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$item->name}}</h5>
    </a>
    <p class="card-text">{{$item->description}}</p>
  </div>
  <ul class="list-group list-group-flush bg-dark">
    <li class="list-group-item list-group-item-dark">Author: {{$item->author}}</li>
    <li class="list-group-item list-group-item-dark">Category: {{$item->category}}</li>
    <li class="list-group-item list-group-item-dark">Price: Rs.{{$item->price}}</li>
  </ul>
  <div class="card-body align-self-center">
    <form action="/add_to_wishlist" method="POST">
      @csrf
      <input type="hidden" name="book_id" value={{$item->id}}>
    <button class="card-link btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
</svg>Add To Wishlist</button>
    <!-- <button class="card-link btn btn-warning">To cart</button> -->
    </form>
  </div>
</div>
@endforeach

<div class="lazy">
@foreach($books as $item)
<div>
    <!-- <img src="" style="width: 50px;px;height: 50px;"> -->
    <img data-lazy="{{$item->gallery}}" class="img-fluid"style=";">
  </div>
  @endforeach
</div>

</div>
</div>

@endsection
@section('script')
<script>
  $(document).ready(function () {
    $('.center').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 4,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
  });

</script>
@endsection