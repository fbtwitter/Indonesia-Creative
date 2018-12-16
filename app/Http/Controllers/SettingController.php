<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\info_user;
use App\login;
use DB;
use Session;
use Alert;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $data = Session::get('data');
      $join=Session::get('join');
      $status = Session::get('status');
      $daftar = Session::get('daftar');
        return view('Setting.index', compact('data', 'daftar'))->with('status',$status);
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
    public function update(Request $request, $tab)
    {
      $id=Session::get('key');
      if($tab==1){
        $req = $request->all();
        $seting = info_user::findOrFail($id)->update($req);
        $data = info_user::find($id);
        $request->session()->put('data',$data);

      }
      if($tab==2){
        $this->validate($request, [
            'old' => 'required',
            'new1' => 'required',
            'new2' => 'required'
        ]);
        $datalogin = login::where('id_info_user', $id)->get();
        foreach ($datalogin as $key) {
          $pass = $key->PASSWORD;
        }
        if($request['new1'] == $request['new2']){
          if($pass == $request['old']){
            login::where('id_info_user', $id)->update(['PASSWORD' => $request['new1']]);
          }
        }

       }
      Alert::success('Data berhasil diperbaharui','OK');
      return redirect()->route('Setting.index');
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
