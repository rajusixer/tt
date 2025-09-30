<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function handleForm(Request $req){
        $name = $req->input('name');
        $email = $req->input('email');
        return view('display', ['name'=>$name, 'email'=>$email]);
    }
}
