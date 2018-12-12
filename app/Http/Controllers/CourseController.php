<?php

 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\sub_course;
use Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all()->toArray();
        $subs = sub_course::all()->toArray();
        return view('course', compact('courses', 'subs'));
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
            'ID_COURSE'    => 'required',
            'NAMA_COURSE'    => 'required',
            'DEFINISI_COURSE'    => 'required'
        ]);
        
        $course = new course([
            'ID_COURSE' =>   $request->get('ID_COURSE'),
            'NAMA_COURSE' => $request->get('NAMA_COURSE'),
            'DEFINISI_COURSE' => $request->get('DEFINISI_COURSE'),
            /*"updated_at" => \Carbon\Carbon::now(),  # \Datetime()
            "created_at" =>  \Carbon\Carbon::now() # \Datetime()*/
            
            
        ]);
        $course->save();
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
        $courses = course::find($id);
        return view('update_course', compact('courses'));
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
      $lama = course::find($id);
      $baru = $request->only([
          'ID_COURSE',
          'NAMA_COURSE',
          'DEFINISI_COURSE'
      ]);

      Validator::make($baru, [
        'ID_COURSE' => 'required',
        'NAMA_COURSE' => 'required',
        'DEFINISI_COURSE' => 'required',
      ])->validate();

      $lama->update([
          'ID_COURSE' => $request->ID_COURSE,
          'NAMA_COURSE' => $request->NAMA_COURSE,
          'DEFINISI_COURSE' => $request->DEFINISI_COURSE
      ]);
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
        course::find($id)->delete();
        return redirect(url('course'));
    }
}
