

<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Book</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2>Are sure want to delete this book ?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" id="delete_book" class="btn btn-primary ">Yes</button>
      </div>
    </div>
  </div>
</div>
@section('script4')
<script>
$(document).on('click','#deletebooks', function (e) {
    e.preventDefault();
    var book_id = $(this).val();
    console.log(book_id);
    $('#delete_bookid').val(book_id);


    $(document).on('click','#delete_book', function (e) {
        e.preventDefault();
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        $.ajax({
            type: "DELETE",
            url: "/deletepage/"+book_id,
            success: function (response) {
                console.log(response);
                $('#message').addClass('alert alert-danger')
                    $('#message').text(response.message)  
                    $('#exampleModal3').modal('hide')
                    fetchbooks();
            }
        });
    });  });
</script>
@endsection