<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreativeController extends Controller
{
    public function login(Request $request){
      //Fungsi untuk menangkap input login
      $email = $request->input('email');
      $request->session()->put('key', $email);
      echo "Session disimpan : ".\Session::get('key')."<br>";
      $pwd = $request->input('password');
      echo "Email anda    : ".$email."<br>";
      echo "Password anda : ".$pwd."<br>";
      echo "<a href='logout'>Logout</a>";
    }
    public function logout(Request $request){
      $request->session()->forget('key');
      echo "Session disimpan : ".\Session::get('key')."<br>";

    }

}
