<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BMIController;
Route::get('/bmi', function () {
return view('userinfo');
});
Route::post('/calculatebmi',[BMIController::class,'calBMI'])->name('calculate');
