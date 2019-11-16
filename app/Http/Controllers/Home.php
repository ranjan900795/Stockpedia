<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Login;
use Session;

class Home extends Controller
{
    public function home(Request $request)
    {
        return view('homepage');
        //$this->validate($request);
    }

    public function login_submit(){
        $id=Login::loginSubmit();
        
        session(['id' => $id]);
        
        
        
        return redirect('/dashboard');// printing the session id
    }

    // public function login_submit(Request $request){
    //     $email=$request->email;
    //     $password=$request->password;
    //     if(Auth::attempt([
    //         'email'=>$email,
    //         'password'=>$password
    //     ])){
    //         return redirect('/dashboard')->with('message','ur logged in');
    //     }else{
    //         return redirect('/home')->with('messege','please try again');
    //     }
    // }
    // public function validate(Request $request){
    //     $this->validate($request, [
    //         // 'name'=>'required|max:255',
    //         'email'=>'required|email|max:255',
    //         'password'=>'required|max:255',
    //     ]);
    //     if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
    //         return redirect('/dashboard');
    //     }else{
    //         return 'Something Wrong';
    //     }
   // }
    
    // public function header(Request $request){
    //     $this->validate($request, [
    //         // 'name'=>'required|max:255',
    //         'email'=>'required|email|max:255',
    //         'password'=>'required|max:255',
    //     ]);
    //     if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
    //         return 'logged in successfully';
    //     }else{
    //         return 'Something Wrong';
    //     }
    // }
    // public function registration()
    // {
    //     return view ('registration');
    // }
    // public function login(){
    //     return view('login');
    // }
    // public function registration_submit(request $request){
    //     //print_r($request->input());
    //     $name = $request->input('name');
    //     $email = $request->input('email');
    //     $password = $request->input('password');
    //     $confirmPassword = $request->input('password_confirmation');
    //     echo DB::insert('insert into users(id,name,email,password,password_confirmation) values(?,?,?,?,?)',[null,$name,$email,$password,$confirmPassword]);
    // }

    // public function login_submit(request $request){
    //     // print_r($request->input());
    //     $name = $request->input('name');
    //     $password = $request->input('password');
    //     $data = DB::select('select id from users where name=? and password=?',[$name,$password]);
    //     echo count($data);
        // print_r($data);
        // if()
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $password = $request->input('password');
        // echo DB::insert('insert into users(id,name,email,password,confirmPassword) values(?,?,?,?,?)',[null,$name,$email,$password,$confirmPassword]);
    }

