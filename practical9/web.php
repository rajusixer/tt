<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\cookie;
use Illuminate\Http\Request;

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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    $name = $request->input('name');
    Cookie::queue('name', $name, 60);
    return redirect('/welcome'); 
});

Route::get('/welcome', function () {
    $name = Cookie::get('name');
    if($name) {
        return view('welcome', ['name' => $name]);
    }else {
        return redirect('/login');
    }
});

Route::get('/logout',function(){
    Cookie::queue(Cookie::forget('name'));
    return redirect('/login');
});
