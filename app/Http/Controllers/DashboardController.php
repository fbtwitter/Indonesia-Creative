<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{

    public function index(Request $request)
    {
        if(isset($request)){
          $id=$request->session()->get('key');
          if($id!=null){
            $data = DB::table('info_users')->where('id_info_user',$id)->get();
            $request->session()->put('data',$data);
            $hak = DB::table('logins')->select('hak_akses')->where('id_info_user',$id)->get();
            foreach ($hak as $h) {
                $hk = $h->hak_akses;
              }
            switch ($hk) {
              case 3:
                $hak = "Student";
                break;
              case 2:
                $hak = "Master";
                break;
              default:
                $hak = "Undefined";
                break;
            }

            $request->session()->put('status',$hak);
            return view('Dashboard.index', compact('data'))->with('status',$hak);
          }

          else
            echo "<script>window.location.href='/'</script>";
        }else
          echo "<script>window.location.href='/'</script>";
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
        //
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
}
