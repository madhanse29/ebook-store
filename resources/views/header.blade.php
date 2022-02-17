<?php
use App\Http\Controllers\BookController;
$total=0;
if(Session::has('user'))
{
  
  $total=BookController::wishlistItem();
}
$totalc=0;
if(Session::has('user'))
{
  
  $totalc=BookController::cartItem();
}

?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
  <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>-BookStore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catogories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/category/Fictional">Fictional</a></li>
            <li><a class="dropdown-item" href="/category/Non_Fictional">Non-Fictional</a></li>
          </ul>
        </li>
     
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/wishlist">Wishlist({{$total}})</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/orderlist">Orders</a>
        </li>
     
        
      </ul>
      <form class="d-flex" action="/search">
        <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success text-light" type="submit">Search</button>
      </form>
      
      @if(Session::has('user'))
      <li class="nav-item dropdown d-flex bg-dark rounded ms-2 text-white">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item bg-danger" href="/logout">Logout</a></li>
          </ul>
        </li>
        <a class="btn btn-success ms-2" href="/addbooks">Add Books</a>
        @else
        <a class="btn btn-success ms-2" href="/login">Login</a>
     <a class="btn btn-success ms-2" href="/register">Register</a>
        @endif
        <ul class="navbar-nav  mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active ms-2 " href="/cartlist">Cart({{$totalc}})</a>
        </li>
</ul>
  </div>
</nav>