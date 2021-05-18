@extends('master') 
@section('content') 
<div class="container">
<div class="row">
    <div class="col-sm-6">
     <img class="img-responsive" src="{{$product['gallery']}}" alt="">
    </div>
    <div class="col-sm-6">

    <a href="/">Back To Shopping</a>
    <h2>Name:{{$product['name']}}</h2>
    <h3>Price:{{$product['price']}}</h3>
    <h3>Category:{{$product['category']}}</h3>
    <h3>Desc:{{$product['decription']}}</h3>
    <form action="/addcart" method="post">
    @csrf
    <input type="hidden" name="product_id" value="{{$product['id']}}">
    <button class="btn btn-info">Add to Cart </button>
    </form>
    
        </div>
</div>
  
  
</div>
@endsection