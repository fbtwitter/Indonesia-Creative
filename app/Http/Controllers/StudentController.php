<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\master;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = daftar_masters::all()->toArray();
        return view('master-list', compact('students'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'first_name'    => 'required',
            'last_name'    => 'required',
            'gender'    => 'required',
            'email'    => 'required',
            'phone'    => 'required',
            'domicile'    => 'required'
        ]);
        
        $student = new Student([
            'first_name' =>   $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            "created_at" =>  \Carbon\Carbon::now(), # \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # \Datetime()
            'gender' => $request->get('gender'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'domicile' => $request->get('domicile')

        ]);
        $student->save();
        return redirect()->route('student.index')->with('success', 'Data Added');
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
        $student = Student::find($id);
        return view('edit', compact('student', 'id'));
        
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
        $this->validate($request, [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'gender'    => 'required',
            'email'    => 'required',
            'phone'    => 'required',
            'domicile'    => 'required'
        ]);
        
        $students = student::find($id);
        $students->first_name = $request->get('first_name');
        $students->last_name = $request->get('last_name');
        $students->gender = $request->get('gender');
        $students->email = $request->get('email');
        $students->phone = $request->get('phone');
        $students->domicile = $request->get('domicile');
        $students->save();
        return redirect()->route('student.index')->with('success', 'Data Updated');
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
