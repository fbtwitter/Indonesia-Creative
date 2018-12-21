<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\librarys;
use DB;

class Master_LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id=session()->get('key');
        $librarys=DB::table('librarys')
            ->join('sub_courses','librarys.ID_SUB_COURSE','=','sub_courses.ID_SUB_COURSE')
            ->select('librarys.ID_LIBRARY','librarys.ID_SUB_COURSE','librarys.JUDUL_SOFT','librarys.SOFTWARE')
            ->where('sub_courses.ID_DAFTAR_MASTER',$id)->get();
            //echo $id;
        return view('master.library', compact('librarys'));
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
        $lib = new librarys;
        $lib->JUDUL_SOFT = $request->judulsoftware;
        $lib->ID_SUB_COURSE = $request->idsubcourse;
        $lib->SOFTWARE = $request->software;
        $lib->save();
        return redirect('LibraryMaster');
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
        $librarys = librarys::find($id);
        return view('master.LibraryUpdate',compact('librarys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $librarys = librarys::find($id)->get();
        return view('master.LibraryUpdate', compact('librarys'));
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
        librarys::find($id)->update([
            'JUDUL_SOFT'=>$request->judul_soft,
            'SOFTWARE'=>$request->software
        ]);
        return back();
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
        library::find($id)->delete();
        return back();
    }
}
