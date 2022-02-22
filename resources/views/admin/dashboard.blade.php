@if(Session::has('user'))

<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body>

<div class="w3-sidebar w3-bar-block bg-dark text-light" style="width:15%">
 <div class="mt-5">
<a href="/addbooks" class="w3-bar-item btn-primary">Add books</a><br>
  <a href="#" class="w3-bar-item btn-primary">Link 2</a><br>
  <a href="#" class="w3-bar-item btn-primary">Link 3</a>
  </div>
</div>

@include('admin.headerad')
<div class="container mt-5 w3-container">
@yield('content')

<!-- <h1>admin</h1> -->
</div>
   
</div>

<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
<style>
    body{
        background: rgb(87,238,40);
     background: linear-gradient(90deg, rgba(87,238,40,1) 0%, rgba(74,69,158,1) 0%, rgba(35,140,180,1) 100%, rgba(0,212,255,1) 100%);
    }
</style>
</html>
@else
please login
@endif