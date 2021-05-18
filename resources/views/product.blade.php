@extends('master') 
@section('content') 
<div class="container-fluid custom-product ">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  @foreach ($products as $pro)
    <div class="item {{$pro['id']==1?'active':''}}">
      <a href="detail/{{$pro['id']}}">
      <img  class="img-slider" src="{{$pro['gallery']}}">
      <h3>{{$pro['name']}}</h3>
      </a>
    </div>
  @endforeach
   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
  <div class="trending-wrapper">
   <h1>Best Seller</h1>
   <!-- Wrapper for slides -->
  <div class="">
  @foreach ($products as $pro)
    <div class="trending-item">
    <a href="detail/{{$pro['id']}}">
      <img  class="trending-img" src="{{$pro['gallery']}}">
      <h3>{{$pro['name']}}</h3>
      </a>
    </div>
  @endforeach
   
  </div>
  </div>
</div>
@endsection