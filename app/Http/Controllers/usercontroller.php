<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{
    //
    function login(Request $req){
       // return $req->input();
      // return User::where(['email'=>$req->email])->first();
      $user =  User::where(['email'=>$req->email])->first();
      if(!$user || !Hash::check($req->password,$user->password))
      {
            return "Username or Password not match";
      }
      else
      {
        $req->session()->put('user',$user);
        return redirect('/');
      }
    }

    function register(Request $req)
    {
      $user =  User::where(['email'=>$req->email])->first();

      
      //return $req->input();
      if(!$user)
      {
      $user = new user;
      $user->name=$req->username;
      $user->email=$req->email;
      $user->password=Hash::make($req->password);
      $user->save();
      return redirect('/login');
      }
      else
      {
        return "User Already Registered";
      }
    }
}
