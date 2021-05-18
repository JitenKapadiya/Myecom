<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\productcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//return view('welcome');
//});
Route::get('/',[productcontroller::class,'index']);
Route::get('/login', function () {
return view('login');
});

//Route::get('/login', function () {
  ///  if(session()->has('user')){
        
    //    return redirect('/');
    //}
    //return view('login');
//});

Route::post('/login',[usercontroller::class,'login']);
Route::get('/product',[productcontroller::class,'index']);
Route::get('detail/{id}',[productcontroller::class,'detail']);
Route::get('search',[productcontroller::class,'search']);
Route::post('/addcart',[productcontroller::class,'addtocart']);
//Route::get('/logout', function () {
    //if(session()->has('user')){
       // session()->pull('user',null);
       // return redirect('login');
    //}    
//});
Route::get('/logout', function () {
  
      Session::forget('user');
      return redirect('/login');
    
});

Route::get('/cartlist',[productcontroller::class,'cartlist']);
Route::view('register','register');
Route::post('/register',[usercontroller::class,'register']);
Route::get('/removecart/{id}',[productcontroller::class,'removecart']);
Route::get('/ordernow',[productcontroller::class,'ordernow']);
Route::post('/placeorder',[productcontroller::class,'placeorder']);
Route::get('/myorder',[productcontroller::class,'myorder']);