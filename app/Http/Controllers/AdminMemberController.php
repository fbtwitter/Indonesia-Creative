<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info_user;
use DB;
class AdminMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = DB::table('logins')
            ->join('info_users', 'logins.id_info_user', '=', 'info_users.id_info_user')
            ->select('logins.email','info_users.id_daftar_master', 'info_users.nama_depan', 'info_users.nama_belakang', 'info_users.gender', 'info_users.domisili', 'info_users.nomor_telp', 'info_users.skill', 'info_users.introduction')
            ->where('logins.hak_akses', '=', '3')
            ->get();
        $iduser = info_user::all()->toArray();
        return view('admin.member-list', compact('member', 'iduser'));
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
            'ID_INFO_USER' => 'required',
            'ID_FORUM' => 'required',
            'ID_DAFTAR_MASTER' => 'required',
            'EMAIL' => 'required',
            'NAMA_DEPAN' => 'required',
            'NAMA_BELAKANG' => 'required',
            'GENDER' => 'required',
            'DOMISILI' => 'required',
            'FOTO_PROFIL' => 'required',
            'NOMOR_TELP' => 'required',
            'SKILL' => 'required',
            'INTRODUCTION' => 'required'
        ]);

        $member_list = new member_list([
            'ID_INFO_USER' => $request->get('ID_INFO_USER'),
            'ID_FORUM' => $request->get('ID_FORUM'),
            'ID_DAFTAR_MASTER' => $request->get('ID_DAFTAR_MASTER'),
            'EMAIL' => $request->get('EMAIL'),
            'NAMA_DEPAN' => $request->get('NAMA_DEPAN'),
            'NAMA_BELAKANG' => $request->get('NAMA_BELAKANG'),
            'GENDER' => $request->get('GENDER'),
            'DOMISILI' => $request->get('DOMISILI'),
            'FOTO_PROFIL' => $request->get('FOTO_PROFIL'),
            'NOMOR_TELP' => $request->get('NOMOR_TELP'),
            'SKILL' => '$request'->get('SKILL'),
            'INTRODUCTION' => '$request'->get('INTRODUCTION')
            /*"updated_at" => \Carbon\Carbon::now(),  # \Datetime()
            "created_at" =>  \Carbon\Carbon::now() # \Datetime()*/


        ]);
        $member_list->save();
        return redirect()->route('member-list.index')->with('success', 'Data Added');
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
        return $id;
    }
}
