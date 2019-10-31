<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\User;

class authController extends Controller
{
    public function showRegisterForm(){
        return view('registration');
    }
    public function register(Request $request){
        
        $this->validation($request);
        //  return $request->all();
        User::create($request->all());//creating a new row in users table
        return redirect('/home')->with('status','You are registered');
    }
    public function validation($request){
        return $this->validate($request, [
            'name'=>'required|max:255',
            'email'=>'required|email|unique:users|max:255',
            'password'=>'required|confirmed|max:255',
        ]); 
    }
        
}
