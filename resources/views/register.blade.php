@extends('master') 
@section('content') 
<div class="container custom-login ">
  <div class="row">
   <div class="col-md-6  col-md-offset-3">
   <h2>User Registration</h2>
   <form action="/register" method="post">
   <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    @csrf
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Register</button>
</form> 
   </div>
  </div>
</div>
@endsection