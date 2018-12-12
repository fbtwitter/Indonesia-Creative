<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
//use App\master;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $master = DB::table('logins')
            ->join('info_users', 'logins.id_info_user', '=', 'info_users.id_info_user')
            ->select('logins.email', 'info_users.nama_depan', 'info_users.nama_belakang', 'info_users.gender', 'info_users.domisili', 'info_users.nomor_telp', 'info_users.skill', 'info_users.introduction')
            ->where('logins.hak_akses', '=', '2')
            ->get();
        return view('master-list', compact('master'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function register(Request $request){
      //Fungsi Registrasi user baru
      $namad = $request->input('fname');
      $namab = $request->input('lname');
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
              'nama_depan' => $namad,
                'nama_belakang' => $namab,
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
              'hak_akses'=>2
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
}
