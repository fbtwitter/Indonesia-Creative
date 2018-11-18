<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;

class CreativeController extends Controller
{
    public function login(Request $request){
      //Fungsi untuk menangkap input login
      $email = $request->input('email');
      $request->session()->put('key', $email);
      //echo "Session disimpan : ".\Session::get('key')."<br>";
      $pwd = $request->input('password');
      echo "<a href='profile'>Profile</a><br>";
      echo "<a href='logout'>Logout</a>";
    }
    public function logout(Request $request){
      $request->session()->forget('key');
      return Redirect::to('/login');
    }
    public function register(Request $request){
      $email = $request->input('email');
      $pwd = $request->input('pwd1');
      $repwd = $request->input('pwd2');

      if(($pwd == $repwd)&&(DB::table('login')->where('email',$email)->first()==null)){
        DB::table('info_user')->insert(
          [
            'nama_depan' => null,
          ]
        );
        $posts = DB::select('select id_info_user from Info_user order by id_info_user desc limit 1');
        foreach ($posts as $post) {
            $id = $post->id_info_user;
          }
        DB::table('login')->insert(
          [
            'id_user' => $id,
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
    public function profil(){
      $session=\Session::get('key');
      $d = DB::table('login')->select('id_user')->where('email',$session)->get();
      foreach ($d as $post) {
          $id = $post->id_user;
        }
      $data = DB::table('info_user')->where('id_info_user',$id)->get();
        return view('profil', compact('data'));

    }
    public function update(Request $req){
      $id = $req->input('id');
      $namad = $req->input('namad');
      $namab = $req->input('namab');
      $jk = $req->input('jk');
      $domisili = $req->input('domisili');

      DB::table('info_user')
          ->where('id_info_user',$id)
          ->update(
            [
              'nama_depan'=>$namad,
              'nama_belakang'=>$namab,
              'jenis_kelamin'=>$jk,
              'domisili'=> $domisili
            ]
          );
      echo "Update profile Succesfull!";
    }
}
