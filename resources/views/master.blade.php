<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-books-stores app</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body class="d-flex flex-column min-vh-100">
    @include('header')
    @yield('content')
    @include('footer')
</body>
<style>
    .custom-login{
        height: 100vh;
        padding-top: 100px;
    }
    a{
        text-decoration:none;
    }
    .custom-image{
        width:100px;
    }
    .custom-detail{
        height:100vh;
    }
    body{
        background: rgb(87,238,40);
     background: linear-gradient(90deg, rgba(87,238,40,1) 0%, rgba(74,69,158,1) 0%, rgba(35,140,180,1) 100%, rgba(0,212,255,1) 100%);
    }
    .detail-img{
        height:25rem;
    }
    .font-sort{
        margin:0 10px;
        font-size:15px;
    }
    .font-sort:hover{
        color:black;
    }
    .search-box{
        width:50rem;
    }
 .custom-card{
    align-items: center;
    padding:50px;
 }
 .card-img{
    border-radius: 50%; height: 80px; width: 80px;
 }
.sorting{
    display:flex;
}
</style>
</html>