<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CreativeController extends Controller
{
    public function login(Request $request){
      //Fungsi untuk menangkap input login
      $email = $request->input('email');
      $request->session()->put('key', $email);
      //echo "Session disimpan : ".\Session::get('key')."<br>";
      $pwd = $request->input('password');
      echo "<a href='Profile'>Profile</a>";
      echo "<a href='logout'>Logout</a>";
    }
    public function logout(Request $request){
      $request->session()->forget('key');
      echo "Session disimpan : ".\Session::get('key')."<br>";
    }
    public function register(Request $request){
      $email = $request->input('email');
      $pwd = $request->input('pwd1');
      $repwd = $request->input('pwd2');

      if($pwd == $repwd){
        DB::table('login')->insert(
          [
            'email' => $email,
            'password'=>$pwd,
          ]
        );
        echo "Register Succesfull !<br>";
        echo "<a href='login'>Login</a>";
      }
      else
        echo "Register Failed !<br><a href='register'>Register</a>";
    }
    public function profil()
}
