<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\sub_course;
use App\daftar_master;
use Validator;
use App\courses;
use Alert;


class SubCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan course dan tambah coursenya
        $id = session()->get('key');
        $DataCourse=sub_course::all();
        return view('master.course', compact('DataCourse'));
        //return view('master.course');
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
    public function store(Request $req)
    {
        //public function inputdata(Request $req){
        $id_course = $req->input('idcourse');
        $id_sub_Course = $req->input('idsubcourse');
        $definisi_sub = $req->input('idmaster');
        $id_user = $req->input('scname');
        $nama_sub = $req->input('definition');

        DB::table('sub_courses')->insert([
            'ID_COURSE' => $id_course,
            'NAMA_SUBCOURSE' => $nama_sub,
            'ID_DAFTAR_MASTER' => $id_user,
            'ID_SUB_COURSE' => $id_sub_Course,
            'DEFINISI_SUB_COURSE' => $definisi_sub
        ]);

        //Alert::succes('Subcourses has created','succes');
        return back();

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
        $DataCourse=DB::table('sub_courses')->where('id_daftar_master',$id)->get();
        return view('master.course', ['DataCourse'=>$DataCourse]);

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
        //$subs = sub_course::find($id);
        $subs = sub_course::where('ID_SUB_COURSE',$id)->get();
        return view('master.UpdateSub',compact('subs'));
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

        DB::table('sub_courses')->where('ID_SUB_COURSE',$id)->update([
            'DEFINISI_SUB_COURSE'=> $request->definisi,
            'NAMA_SUBCOURSE'=>$request->scname
        ]);
        return redirect('Sub_Course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        sub_course::where('id_sub_course',$id)->delete();
        return redirect('Sub_Course');
    }
}
