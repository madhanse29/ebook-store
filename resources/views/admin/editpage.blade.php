@extends('admin.dashboard')
@section('content')

<div class="container custom-login text-light mb-3" style="position:relative; left: 75px;">
<div class="row">
<h2 class="text-center">Edit book</h2>
    <div class="col-sm-4 mx-auto">
    <form action="/edited" method="post">
        @csrf
        <!-- @method('PUT') -->
  <div class="mb-3">
    <label for="name" name="name" class="form-label">Book Name</label>
    <input type="name" name="name" value="{{$data->name}}" class="form-control" id="name" aria-describedby="bookname">
</div>
  <div class="mb-3">
    <label for="author" name="author"  class="form-label">Author Name</label>
    <input type="author" name="author"value="{{$data->author}}" class="form-control" id="author" aria-describedby="authorname">
</div>
  <div class="mb-3">
    <label for="price" name="price" class="form-label">Price in Rs. </label>
    <input type="price" name="price" value="{{$data->price}}" class="form-control" id="price" aria-describedby="price">
</div>
  <div class="mb-3">
    <label for="gallery" name="gallery" class="form-label">Image Url</label>
    <input type="gallery" name="gallery" value="{{$data->gallery}}" class="form-control" id="gallery" aria-describedby="gallery">
</div>
<div class="mb-3">
      <label for="Select" class="form-label">Category</label>
      <select id="Select" value="{{$data->category}}" name="selValue" class="selectpicker form-select">
        <option  name="category"value="">Fictional</option>
        <option  name="category" value="">Non Fictional</option>
      </select>
    </div>
    <div class="mb-3">
    <label for="description" name="description" class="form-label">Description</label>
    <textarea type="text"  name="description"  class="form-control">{{$data->description}}</textarea>
  </div>
    <div class="mb-3">
    <label for="summary" name="summary" class="form-label">Summary</label>
    <textarea type="text" name="summary"   class="form-control">{{$data->summary}}</textarea>
  </div>
  <input type="hidden" name="id" value="{{$data->id}}">
  <button type="submit" class="btn btn-warning ">Save</button>
  
</form>
    </div>
</div>
</div>

@endsection