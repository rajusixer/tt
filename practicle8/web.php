<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BMIController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bmi', function () {
    return view('userinfo');
});

// Route::post('/calculatebmi',[App\Http\Controllers\BMIController::class,'calBMI'])->name('calculate');
Route::post('/calculatebmi', [BMIController::class, 'calBMI'])->name('calculate'); 

