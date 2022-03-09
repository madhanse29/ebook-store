<div class="w3-sidebar w3-bar-block w3-collapse w3-card bg-dark text-light" style="width:15%" id="mySidebar">
  <button class="w3-bar-item w3-button w3-hide-large"
  onclick="w3_close()">Close &times;</button>
  <div class="" style="margin-top: 8rem;">
  <a type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal1" class="w3-bar-item btn-primary">Add Books</a><br>
  <a href="/editbooks" class="w3-bar-item btn-primary">Edit Books</a><br>
  </div>
</div>

<!-- Button trigger modal -->

@include('admin.addbooks')
