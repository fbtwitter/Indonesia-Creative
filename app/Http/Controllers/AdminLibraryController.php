<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\librarys;

class AdminLibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $librarys = librarys::all()->toArray();
        return view('admin.library', compact('librarys'));
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
            'ID_LIBRARY' => 'required',
            'ID_SUB_COURSE' => 'required',
            'SOFTWARE' => 'required'
        ]);

        $library = new Library([
            'ID_LIBRARY' => $request->get('ID_LIBRARY'),
            'ID_SUB_COURSE' => $request->get('ID_SUB_COURSE'),
            'SOFTWARE' => $request->get('SOFTWARE')
            /*"updated_at" => \Carbon\Carbon::now(),  # \Datetime()
            "created_at" =>  \Carbon\Carbon::now() # \Datetime()*/


        ]);
        $library->save();
        return redirect()->route('adminlibrary.index')->with('success', 'Data Added');
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
        $library = library::find($id);
        return view('admin.adminlibrary', compact('library', 'id_library'));
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
            'ID_LIBRARY'    => 'required',
            'ID_SUB_COURSE'     => 'required',
            'SOFTWARE'    => 'required'
        ]);

        $librarys = library::find($id);
        $librarys->first_name = $request->get('ID_LIBRARY');
        $librarys->last_name = $request->get('ID_SUB_QUERY');
        $librarys->gender = $request->get('SOFTWARE');
        $librarys->save();
        return redirect()->route('adminlibrary.index')->with('success', 'Data Updated');
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

    public function delete($id_library){
        librarys::find($id_library)->delete();
        return redirect(url('adminlibrary'));
    }
}
