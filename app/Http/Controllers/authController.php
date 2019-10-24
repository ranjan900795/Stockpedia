<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function showRegisterForm(){
        return view('registration');
    }
    public function register(Request $request){
        $this->validation($request);
        return $request->all();
    }
    public function validation(Request $request){
        $validateData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'passsword'=>'required|confirmed|max:255',
        ]);
        
    }
}
