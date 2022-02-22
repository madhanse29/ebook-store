@extends('admin.dashboard')
@section('content')

<div class="container custom-login text-light mb-3" style="height:1000px;">
<div class="row">
<h2 class="text-center">Add books</h2>
    <div class="col-sm-4 mx-auto">
    <form action="/added" method="POST">
        @csrf
  <div class="mb-3">
    <label for="name" name="name" class="form-label">Book Name</label>
    <input type="name" name="name" class="form-control" id="name" aria-describedby="bookname">
</div>
  <div class="mb-3">
    <label for="author" name="author" class="form-label">Author Name</label>
    <input type="author" name="author" class="form-control" id="author" aria-describedby="authorname">
</div>
  <div class="mb-3">
    <label for="price" name="price" class="form-label">Price in Rs. </label>
    <input type="price" name="price" class="form-control" id="price" aria-describedby="price">
</div>
  <div class="mb-3">
    <label for="gallery" name="gallery" class="form-label">Image Url</label>
    <input type="gallery" name="gallery" class="form-control" id="gallery" aria-describedby="gallery">
</div>
<div class="mb-3">
      <label for="Select" class="form-label">Category</label>
      <select id="Select" name="category" class="form-select">
        <option  name="category" value="Fictional">Fictional</option>
        <option  name="category" value="Non_Fictional">Non Fictional</option>
      </select>
    </div>
    <div class="mb-3">
    <label for="description" name="description" class="form-label">Description</label>
    <textarea type="text" name="description" placeholder="Enter Description" class="form-control"></textarea>
  </div>
    <div class="mb-3">
    <label for="summary" name="summary" class="form-label">Summary</label>
    <textarea type="text" name="summary" placeholder="Enter summary of book" class="form-control"></textarea>
  </div>
  
  <button type="submit" class="btn btn-warning ">ADD</button>
</form>
    </div>
</div>
</div>
@endsection