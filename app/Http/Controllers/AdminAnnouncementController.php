<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\announcement;
use DB;
use Validator;

class AdminAnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announces = announcement::all()->toArray();
        return view('admin.announce', compact('announces'));
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
        $announces = new announcement($request->input());
        $announces->save();
        return redirect()->route('announce.index')->with('success', 'Data Added');
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
      $announces = announcement::find($id);
      return view('admin.update_announce', compact('announces'));
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
      $lama = announcement::find($id);
      $baru = $request->only([
          'ID_COURSE',
          'TANGGAL',
          'DESKRIPSI'
      ]);

      Validator::make($baru, [
        'ID_COURSE' => 'required',
        'TANGGAL' => 'required',
        'DESKRIPSI' => 'required',
      ])->validate();

      $lama->update([
          'ID_COURSE' => $request->ID_COURSE,
          'TANGGAL' => $request->TANGGAL,
          'DESKRIPSI' => $request->DESKRIPSI
      ]);
          return redirect(url('announce'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      announcement::find($id)->delete();
      return redirect(url('announce'));
    }
}
