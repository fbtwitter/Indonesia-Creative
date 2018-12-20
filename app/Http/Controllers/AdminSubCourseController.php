<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\sub_course;
use App\daftar_master;
use Validator;

class AdminSubCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      $this->validate($request, [
          'ID_SUB_COURSE'    => 'required',
          'ID_COURSE'     => 'required',
          'ID_DAFTAR_MASTER' => 'required',
          'DEFINISI_SUB_COURSE'    => 'required'
      ]);

      $subcourse = new sub_course([
          'ID_SUB_COURSE' =>   $request->get('ID_SUB_COURSE'),
          'ID_COURSE' => $request->get('ID_COURSE'),
          'ID_DAFTAR_MASTER' => $request->get('ID_DAFTAR_MASTER'),
          'DEFINISI_SUB_COURSE' => $request->get('DEFINISI_SUB_COURSE'),
          /*"updated_at" => \Carbon\Carbon::now(),  # \Datetime()
          "created_at" =>  \Carbon\Carbon::now() # \Datetime()*/


      ]);
      $subcourse->save();
      return redirect()->route('course.index')->with('success', 'Data Added');

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
        $subs = sub_course::find($id);
        return view('admin.update_subcourse', compact('subs'));
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

        $sublama = sub_course::find($id);
        //$masterlama = daftar_master::find($id);
        $subbaru = $request->only(
            [
                'DEFINISI_SUB_COURSE'
            ]
        );

        Validator::make($subbaru, [
                'DEFINISI_SUB_COURSE'=> 'required',
        ])->validate();

        $sublama->update([
                'DEFINISI_SUB_COURSE' => $request->DEFINISI_SUB_COURSE
        ]);

        /*$masterbaru = $request->only([
                'ID_DAFTAR_MASTER',
                'ID_SUB_COURSE'
            ]);
        Validator::make($masterbaru, [
            'ID_DAFTAR_MASTER' => 'required',
            'ID_SUB_COURSE' => 'required',
        ])->validate();

        $masterlama->update([
           'ID_DAFTAR_MASTER' => $request->ID_DAFTAR_MASTER,
            'ID_COURSE' => $request->ID_SUB_COURSE
        ]);*/

        return redirect(url('course'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      sub_course::find($id)->delete();
      return redirect(url('course'));
    }
}
