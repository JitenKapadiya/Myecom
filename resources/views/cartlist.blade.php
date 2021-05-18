@extends('master') 
@section('content') 
<div class="container-fluid custom-product ">
  
  

  
  
  <div class="trending-wrapper">
   <h3>Cart List</h3>
   <a href="/ordernow" class="btn btn-success">Place Order</a>
 
  @foreach ($products as $pro)
    <div class="row">
    <div class="col-sm-3">
    <a href="detail/{{$pro->id}}">
      <img  class="trending-img" src="{{$pro->gallery}}">
      </a>
      </div>
      <div class="col-sm-3">
      <h3>{{$pro->name}}</h3>
      <h4>{{$pro->price}}</h4>
      <h4>{{$pro->category}}</h4>
      <h4>{{$pro->decription}}</h4>
      </div>
      <div class="col-sm-3" style="padding-top:50px;">
        <a href="/removecart/{{$pro->cart_id}}" class="btn btn-warning">Remove From Cart</a>
      </div>
    </div>
  @endforeach
   
  </div>
  
</div>
@endsection