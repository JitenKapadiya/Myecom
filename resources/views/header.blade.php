<?php
use App\Http\Controllers\productcontroller;
$total=0;
if(Session::has('user')){
  $total = productcontroller::cartitem();
}

?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Ecom</a>
    </div>

   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class=""><a href="#">Order</a></li>
         
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      @if($total>0)
      <li><a href="/cartlist">Cart({{$total}})</a></li>
      @else
      <li><a href="#">Cart({{$total}})</a></li>
      @endif
      @if(Session::has('user'))
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li class=""><a href="/myorder">MyOrders</a></li>
        <li><a href="/logout">Logout</a></li>
        </ul>
      </li>
      @else
      <li><a href="/login">Login</a></li>
      <li><a href="/register">Register</a></li>
      @endif
        
        </ul>
      </li>
     
      </ul>
    </div>
  </div>
</nav>