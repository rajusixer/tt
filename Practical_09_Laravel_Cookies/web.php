<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
Route::get('/login', function () {
return view('login');
});
Route::post('/login', function(Request $request){
$name=$request->input('name');
Cookie::queue('user_name',$name,60);
return redirect('/welcome');
});
Route::get('/welcome', function(){
$name=Cookie::get('user_name');
if($name){
return view('welcome',['name' => $name]);
}else{
return redirect('/login');
}
});
Route::get('/logout', function(){
Cookie::queue(Cookie::forget('user_name'));
return redirect('/login');
});
