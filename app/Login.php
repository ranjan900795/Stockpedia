<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public static function loginSubmit(){
        $email=$_POST["email"];
        $pass=$_POST["password"];

        $id = DB::table('users')->where('email',$email)->where('password',$pass)->value('id');
        return $id;
    } 
}
