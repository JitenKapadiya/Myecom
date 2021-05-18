@extends('master') 
@section('content') 
<div class="container-fluid custom-product ">
  
  

  
  
  <div class="trending-wrapper">
   <h1>Searched Products</h1>
   <!-- Wrapper for slides -->
 
  @foreach ($products as $pro)
    <div class="">
    <a href="detail/{{$pro['id']}}">
      <img  class="trending-img" src="{{$pro['gallery']}}">
      <h3>{{$pro['name']}}</h3>
      <h4>{{$pro['price']}}</h4>
      <h4>{{$pro['category']}}</h4>
      <h4>{{$pro['decription']}}</h4>
      </a>
    </div>
  @endforeach
   
  </div>
  
</div>
@endsection