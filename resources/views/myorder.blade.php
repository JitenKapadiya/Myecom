@extends('master') 
@section('content') 
<div class="container-fluid custom-product ">
  
  

  
  
  <div class="trending-wrapper">
   <h3>My Orders</h3>
   
 
  @foreach ($orders as $ord)
    <div class="row">
    <div class="col-sm-3">
    <a href="detail/{{$ord->id}}">
      <img  class="trending-img" src="{{$ord->gallery}}">
      </a>
      </div>
      <div class="col-sm-3">
      <h3>Name:{{$ord->name}}</h3>
      <h4>Order Status:{{$ord->status}}</h4>
      <h4>Payment Method:{{$ord->payment_method}}</h4>
      <h4>Payment Status:{{$ord->payment_status}}</h4>
      <h4>Delivery Address:{{$ord->address}}</h4>
      <h4>OrderId:{{$ord->id}}</h4>
      </div>
      
    </div>
  @endforeach
   
  </div>
  
</div>
@endsection