@extends('master') 
@section('content') 
<div class="container">  
  <div class="row">
    <div class="col-sm-9">
    <table class="table table-striped">
   
      <tr>
        <td>Price:</td>
        <td>{{$total}}</td>
        
      </tr>
      
      <tr>
        <td>Delivery Charge:</td>
        <td>100</td>
        
      </tr>
      <tr>
        <td>Total Amount:</td>
        <td>{{$total + 100}}</td>
        
      </tr>
    
  </table>

  <form class="form-inline" action="/placeorder" method="post">
  <div class="form-group">
   @csrf
    <textarea class="form-control" name="address"></textarea>
  </div>
  <br><br>
  <div class="radio">
  <label>Payment Method:</label>
  <br><br>
    <label><input type="radio" name="payment" value="Online"> Online</label>
    <label><input type="radio" name="payment" value="Cash"> Cash</label>
    <label><input type="radio" name="payment" value="UPI"> UPI</label>
  </div>
  <br><br><br>
  <button type="submit" class="btn btn-info">Place Order</button>
</form>
<br><br>
    </div>
  </div>  
</div>
@endsection