<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\URL;
 use Illuminate\Support\Facades\DB;


class Home extends Controller
{
    public function home()
    {
        return view('homepage');
    }
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

