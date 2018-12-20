<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info_user;
use App\peserta_course;
use App\course;
use Session;
use DB;

class DashboardController extends Controller
{

    public function index(Request $request)
    {

        if(isset($request)){
          $id=$request->session()->get('key');
          if($id!=null){
          
            $terdaftar = peserta_course::select('ID_COURSE')->where('ID_INFO_USER', Session::get('key'))->get();
            $i=0;
            foreach ($terdaftar as $t) {
              $join[$i]= $t->ID_COURSE;
              $i++;
            }
            if (isset($join)) {
              $request->session()->put('join', $join);
            }
            else {
              $request->Session()->forget('join');
            }
            $request->session()->put('status',$hak);
            $daftar = course::all();
            $request->session()->put('daftar',$daftar);
            return view('Dashboard.index', compact('data', 'daftar'))->with('status',$hak);
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
