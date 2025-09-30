<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function handleForm(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        
        return view('display', compact('name', 'email'));
    }
}