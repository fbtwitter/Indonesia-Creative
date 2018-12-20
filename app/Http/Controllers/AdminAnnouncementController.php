<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\announcement;
use DB;

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


        //$birthday = Carbon::parse($request->birthday)->format('Y-m-d');

        $this->validate($request, [
            'ID_ANNOUNCEMENT' => 'required',
            'ID_COURSE' => 'required',
            'TANGGAL' => 'required'
        ]);
        $date = DateTime::createFromFormat('d-m-Y', $request->input('TANGGAL'));
        $announcement = new Announcement([
            'ID_ANNOUNCEMENT' => $request->get('ID_ANNOUNCEMENT'),
            'ID_COURSE' => $request->get('ID_COURSE'),
            'TANGGAL' => $date->format('Y-m-d')
            //'TANGGAL' => Carbon::parse($request->TANGGAL)->format('yyyy-mm-dd'),
            //'TANGGAL' => \Carbon\Carbon::createFromFormat('d/m/Y', $request->get('TANGGAL'))
            /*"updated_at" => \Carbon\Carbon::now(),  # \Datetime()
            "created_at" =>  \Carbon\Carbon::now() # \Datetime()*/


        ]);
        $announcement->save();
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
