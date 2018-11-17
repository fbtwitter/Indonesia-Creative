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
    public function register(Request $request){
      $namad = $request->input('namad');
      $namab = $request->input('namab');

      $email = $request->input('email');
      $pwd = $request->input('pwd1');
      $repwd = $request->input('pwd2');

      if($pwd == $repwd){
        DB::table('info_user')->insert(
          [
            'email' => $email,
            'nama_depan' => $namad,
            'nama_belakang' => $namab,
          ]
        );
        echo "Register Succesfull !";
      }

      else
        echo "Register Failed !";
    }
}
