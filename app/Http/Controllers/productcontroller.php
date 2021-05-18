<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use Session;
class productcontroller extends Controller
{
    //
    function index(){
        //return product::all();
        $data = product::all();
        return view('product', ['products'=>$data]); 
    }
    function detail($id){
        //return product::find($id);
        $data = product::find($id);
        return view('productdetail',['product'=>$data]);
    }
    function search(Request $req){
        //return $req->input();
       //return $data = product::where('name','like','%'.$req->input('query').'%')->get();
       $data = product::where('name','like','%'.$req->input('query').'%')->get();
       return view('search',['products'=>$data]);
    }
    function addtocart(Request $req){
        if($req->session()->has('user')){
           // return $req->input();
           $cart = new cart;
           $cart->user_id = $req->session()->get('user')['id'];
           $cart->product_id=$req->product_id;
           $cart->save();
           return redirect('/');
        }
        else{
            return redirect('/login');
        }
        
    }

    static function cartitem(){
        $userid = Session::get('user')['id'];
        return cart::where('user_id',$userid)->count();
    }

    function cartlist(){
        $userid = Session::get('user')['id'];
        $data =  DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userid)
        ->get();
        return view('cartlist',['products'=>$data]);
    }
    function removecart($id){
        //cart::destroy($id);
        $data1 = cart::find($id);
        $data1->delete();
        return redirect('cartlist');
    }

    function ordernow(){
        $userid = Session::get('user')['id'];
        $data =  DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userid)
        ->sum('products.price');
       return view('ordernow',['total'=>$data]);
    }

    function placeorder(Request $req){
        $userid = Session::get('user')['id'];
        $allcart =Cart::where('user_id',$userid)->get();
        foreach($allcart as $cart)
        {
          $order = new order;
          $order->product_id=$cart['product_id'];
          $order->user_id=$cart['user_id'];
          $order->address=$req->address;
          $order->status="Order Received";
          $order->payment_method=$req->payment;
          $order->payment_status="Pending";
          $order->save();
        }
        Cart::where('user_id',$userid)->delete();
        return redirect('/');
         // return $req->input();
    }

    function myorder(){
        $userid = Session::get('user')['id'];
        $data = DB::table('orders')
        ->join('products','orders.product_id','products.id')
        ->where('orders.user_id',$userid)
        ->get();
        return view('myorder',['orders'=>$data]);
    }
    
}
