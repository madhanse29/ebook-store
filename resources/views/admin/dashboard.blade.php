@extends('admin.master')
<!-- @extends('admin.addbooks') -->
@section('content')

<div class="container" >
<div id="message" style="margin-left:15%"></div>
    <div class="row justify-content-around main" style="margin-left:15%">
   


</div>
</div>
@include('admin.delete')
@endsection
@section('script3')

<script>


  fetchbooks();
   
  function fetchbooks(){

    $.ajax({
      type: "GET",
      url: "/fetchbooks",
      dataType: "json",
      success: function (response) {
       console.log(response.books);
       $('.main').html("");
        $.each(response.books, function (key,item) { 
           $('.main').append(
          
  '<div class="card m-2 col-sm-8 bg-dark text-light " style="width: 25rem;">\
  <a href="detail/'+item.id+'">\
  <img src="'+item.gallery+'" class="card-img-top mt-2 img-thumbnail" style="height:30rem width:30rem" alt="...">\
  <div class="card-body">\
    <h5 class="card-title">'+item.name+'</h5>\
    </a>\
    <p class="card-text">'+item.description+'</p>\
  </div>\
  <ul class="list-group list-group-flush bg-dark">\
    <li class="list-group-item list-group-item-dark">Author:'+item.author+'</li>\
    <li class="list-group-item list-group-item-dark">Category:'+item.category+'</li>\
    <li class="list-group-item list-group-item-dark">Price: Rs.'+item.price+'</li>\
  </ul>\
  <div class="card-body align-self-center">\
    <button type="button" class="card-link btn btn-info" id="editbooks" value="'+item.id+'" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">\
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>\
</svg></button>\
    <button type="button" value="'+item.id+'" id="deletebooks" data-bs-toggle="modal" data-bs-target="#exampleModal3" class="card-link btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">\
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>\
</svg></button>\
      </div>\
</div>'
           )
        });

      }
    });
  }

</script>
@endsection

@include('admin.edit')