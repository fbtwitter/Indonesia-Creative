<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreativeController extends Controller
{
    public function login(Request $request){
      //Fungsi untuk menangkap input login
      $email = $request->input('email');
      $pwd = $request->input('password');
      echo "Email anda    : ".$email."<br>";
      echo "Password anda : ".$pwd."<br>";
    }

}
