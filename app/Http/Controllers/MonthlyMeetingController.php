<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\monthly_meeting;
use DB;

class MonthlyMeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataMonthly = monthly_meeting::all();
        //echo $dataMonthly;
        return view('master.MonthlyMeeting',['dataMonthly'=>$dataMonthly]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('master.MonthlyMeetingAdd');
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
        $dataMonth = new monthly_meeting;
        $dataMonth->id_monthlymeeting = $request->idmonthly;
        $dataMonth->id_daftar_master = $request->idmaster;
        $dataMonth->definisi_mnthly = $request->definisiagenda;
        $dataMonth->save();

        return redirect('Monthly');
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
        $dataMonthly = monthly_meeting::where('ID_MONTHLYMEETING',$id)->get();
        return view('master.MonthlyMeetingEdit',['dataMonthly'=>$dataMonthly]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    { 
        //$definisi = $req->definisi;
        DB::table('monthly_meetings')->where('ID_MONTHLYMEETING',$id)->update([
            'DEFINISI_MNTHLY'=>$req->definisiagenda
        ]);
       return redirect('Monthly');
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
        monthly_meeting::where('ID_MONTHLYMEETING',$id)->delete();
        return redirect('Monthly');
    }
}
