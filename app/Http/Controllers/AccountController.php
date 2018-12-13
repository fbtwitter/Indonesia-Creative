<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Routes\web;
use Redirect;
use DB;
use App\database;

class AccountController extends Controller
{
    public function login(Request $request){
      //Fungsi untuk menangkap input login
      $email = $request->input('email');
      $pwd = $request->input('password');
      $affect = DB::table('logins')
      ->where('email',$email)
      ->where('password', $pwd)
      ->get()->count();
      if($affect==1){
        $d = DB::table('logins')->select('id_info_user')->where('email',$email)->get();
        foreach ($d as $post) {
            $id = $post->id_info_user;
          }
        $request->session()->put('key', $id);
        echo "<script>window.location.href='dashboard'</script>";
      }else{
        echo "<script>
              window.location.href='/';
              </script>";
      }

    }


    public function logout(Request $request){
      //Fungsi Log Out
      $request->session()->forget('key');
      echo "<script>window.location.href='/'</script>";
    }



    public function register(Request $request){
      //Fungsi Registrasi user baru
      $nama = $request->input('name');
      $email = $request->input('email');
      $pwd = $request->input('password');
      $repwd = $request->input('repassword');
      $affect = DB::table('logins')->where('email', $email)->get()->count();

      if($affect!=0){
        echo "<script>
              alert('Email has registered!');
              window.location.href='/';
              </script>";
      }else {

        if($pwd == $repwd){
          DB::table('info_users')->insert(
            [
              'nama_depan' => $nama,
            ]
          );
          $posts = DB::select('select id_info_user from Info_users order by id_info_user desc limit 1');
          foreach ($posts as $post) {
              $id = $post->id_info_user;
            }
          DB::table('logins')->insert(
            [
              'id_info_user' => $id,
              'email' => $email,
              'password'=>$pwd,
              'hak_akses'=>3
            ]
          );
          echo "<script>
                alert('Register Succesfull!!');
                window.location.href='/';
                </script>";
        }else{
          echo "<script>
                alert('Register Failed!!');
                window.location.href='/';
                </script>";
        }
      }

    }

    public function profil(){
      //Fungsi menampilkan Form untuk edit profil
      $session=\Session::get('key');
      $d = DB::table('login')->select('id_user')->where('email',$session)->get();
      foreach ($d as $post) {
          $id = $post->id_user;
        }
      $data = DB::table('info_user')->where('id_info_user',$id)->get();
        return view('profil', compact('data'));

    }



    public function update(Request $req){
      //Fungsi update profil
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


    public function loginadmin(){
      //Funsgi login admin
      $post = DB::table('login')->where('email','admin')->get();
      $cek="";
      foreach ($post as $key) {
        $cek = $key->email;
      }

      if($cek == null){
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
            'email' => 'admin',
            'password'=>'admin',
            'hak_akses'=> 1
          ]
        );
      }
      return view('admin');
    }


    public function adm(Request $req){
      $uname = $req->input('email');
      $pwd= $req->input('password');
      $post=DB::table('login')->where(
        [
          ['email',$uname],
          ['password',$pwd]
        ]
        )->get();
      foreach ($variable as $key) {
        $cek = $key->hak_akses;
      }
      if($cek==1){
        $req->session()->put('key', $email);
        echo "<a href='passone'>Ubah password</a><br>";
        echo "<a href='newmaster'>Tambah Master baru</a><br>";
      }

    }


}
