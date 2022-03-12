
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       @include('admin.editpage')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_books">Save changes</button>
      </div>
    </div>
  </div>
</div>
@section('script1')
<script>
    $(document).on('click','#editbooks', function (e) {
        e.preventDefault();
        var book_id = $(this).val();
        // console.log(book_id);

        $.ajax({
            type: "GET",
            url: "/editpage/"+book_id,
            success: function (response) {
                // console.log(response);
                $('.edit_name').val(response.data.name),
                $('.edit_author').val(response.data.author),
                $('.edit_price').val(response.data.price),
                $('.edit_gallery').val(response.data.gallery),
                $('.edit_category').val(response.data.category),
                $('.edit_description').val(response.data.description),
                $('.edit_summary').val(response.data.summary),
                $('.edit_id').val(response.data.id)
            }
        });

        $(document).on('click','.update_books', function (e) {
            e.preventDefault();
            var stud_id = $('.edit_id').val();
            var data = {
                'name': $('.edit_name').val(),
                'author': $('.edit_author').val(),
                'price': $('.edit_price').val(),
                'gallery': $('.edit_gallery').val(),
                'category': $('.edit_category').val(),
                'description': $('.edit_description').val(),
                'summary': $('.edit_summary').val(),
                'id': $('.edit_id').val(),
            }
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
console.log(data);
        $.ajax({
            type: "PUT",
            url: "/edited",
            data: data,
            dataType: "json",
            success: function (response) {
                console.log(response);
                   $('#message').addClass('alert alert-success')
                    $('#message').text(response.message)
                    $('#exampleModal').modal('hide')
                    fetchbooks();
            }
        });
        });
         
    });
</script>

@endsection