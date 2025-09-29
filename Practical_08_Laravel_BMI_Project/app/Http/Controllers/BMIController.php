<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIController extends Controller
{
    public function calBMI(Request $req)
    {
        $weight = $req->input('weight');
        $height = $req->input('height');
        $heightInMeters = $height / 100;
        $bmi = $weight / ($heightInMeters * $heightInMeters);
        
        if ($bmi < 18.5) {
            $result = "Underweight";
            $image = "underweight.jpg";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $result = "Healthy";
            $image = "fit.jpg";
        } else {
            $result = "Overweight";
            $image = "overweight.jpg";
        }
        
        return view('result', compact('bmi', 'result', 'image'));
    }
}