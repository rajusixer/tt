<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    //
    public function calBMI(Request $req){
        $weight = $req->input('weight');
        $height = $req->input('height');

        $heightinM = $height/100;
        $bmi = $weight / ($heightinM * $heightinM);
        // $bmi = $weight / (($height/100) * ($height/100));

        if($bmi < 18.5){
            $result = "Underweight";
            $image = "underweight.jpeg";
        }elseif($bmi >= 18.5 && $bmi < 24.9){
            $result = "Normal weight";
            $image = "normal.webp";
        }else {
            $result = "Overweight";
            $image = "overweight.webp";
        }

        return view('result',compact('bmi','result','image'));
    }
}
