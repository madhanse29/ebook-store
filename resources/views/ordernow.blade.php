@extends('master')
@section('content')
<div class="container custom-product mt-3 me-auto">

<div class="col-sm-10">
<table class="table table-success table-striped">
  <tbody>
    <tr>
      <td>Amount</td>
      <td>Rs.{{$total}}</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>Rs.0</td>
    </tr>
    <tr>
      <td>Delivery</td>
      <td>Rs.10</td>
    </tr>
    <tr>
      <td>Total Amount</td>
      <td>Rs.{{$total+10}}</td>
    </tr>
  </tbody>
</table>
<div>
<form action='/orderplace' method="POST">
    @csrf
  <div class="mb-3">
    <textarea type="text" name="address" placeholder="Enter your address" class="form-control"></textarea>
  </div>
  <div class="mb-3 text-light">
    <label for="pwd" class="form-label">Payment Method</label><br>
    <input class="form-check-input" type="radio" value="online"  name="payment"><span> Online payment</span><br>
    <input class="form-check-input" type="radio" value="emi" name="payment"><span> EMI payment</span><br>
    <input class="form-check-input" type="radio" value="COD" name="payment"><span> Cash on Delivery</span>
  </div>
  <button type="submit" class="btn btn-primary">Order now</button>
</form>
</div>

</div>
</div>
@endsection 