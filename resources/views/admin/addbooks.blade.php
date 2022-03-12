<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formData">
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
      <label for="Select"  class="form-label">Category</label>
      <select id="category" value="category" name="category" class="form-select">
        <option id="category" name="category" value="Fictional">Fictional</option>
        <option id="category" name="category" value="Non_Fictional">Non Fictional</option>
      </select>
    </div>
    <div class="mb-3">
    <label for="description" name="description" class="form-label">Description</label>
    <textarea type="text" id="description" name="description" placeholder="Enter Description" class="form-control"></textarea>
  </div>
    <div class="mb-3">
    <label for="summary" name="summary" class="form-label">Summary</label>
    <textarea type="text" id="summary" name="summary" placeholder="Enter summary of book" class="form-control"></textarea>
  </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="addbooks" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>
<!-- @yield('script3') -->
@section('script')
<script>
        $(document).on('click','#addbooks', function () {
          var data = $('#formData').serialize();
            console.log('hi',data);

        //     var data ={
        // 'name':$('#name').val(),
        // 'author':$('#author').val(),
        // 'price':$('#price').val(),
        // 'gallery':$('#gallery').val(),
        // 'category':$('#category').val(),
        // 'description':$('#description').val(),
        // 'summary':$('#summary').val(),
        //     }
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
            $.ajax({
                type: "POST",
                url: "/added",
                data: data,
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    // location.reload();
                  
                    $('#exampleModal1').modal('hide')
                    $('#exampleModal1').find('input','textarea').val("");
                    
                     $('#message').addClass('alert alert-success')
                    $('#message').text(response.message)  
                    fetchbooks();                  
                }
            }); 
           
            });
</script>
@endsection