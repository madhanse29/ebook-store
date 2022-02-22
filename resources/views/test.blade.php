@extends('master')
@section('content')

<div class="container sorting ">
    <div class="row justify-content-between">
<div class=" col-xl-6 col-lg-6 col-md-8 col-sm-12 mt-1">
<form class="d-flex" action="/search">
        <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark text-light" type="submit">Search</button>
      </form>
      <div class="dropdown " style="position: absolute; left: 80vw;">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
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
</div>
</div>
@endsection