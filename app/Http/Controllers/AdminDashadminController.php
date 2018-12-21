<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;
use App\librarys;
use App\course;
use App\peserta_course;
use DB;

class AdminDashadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $software = librarys::count();
          $kategori = course::count();
          $member = login::where('HAK_AKSES','3')->count();
          $master = login::where('HAK_AKSES','2')->count();
          $sumkategori1 = peserta_course::where('ID_COURSE', '1')->count();
          $sumkategori2 = peserta_course::where('ID_COURSE', '2')->count();
          $sumkategori3 = peserta_course::where('ID_COURSE', '3')->count();
          $sumkategori4 = peserta_course::where('ID_COURSE', '4')->count();
          $latest = DB::table('logins')
              ->join('info_users', 'logins.id_info_user', '=', 'info_users.id_info_user')
              ->select('info_users.id_info_user', 'info_users.nama_depan', 'info_users.nama_belakang', 'info_users.gender', 'info_users.domisili')
              ->where('logins.hak_akses', '=', '3')
              ->orderBy('id_info_user', 'desc')
              ->limit(5)
              ->get();
          $announce= DB::table('announcements')
                ->select('deskripsi', 'tanggal')
                ->orderBy('id_announcement', 'desc')
                ->limit(5)
                ->get();
            $forum = DB::table('info_users')
                ->join('forums', 'info_users.id_info_user', '=', 'forums.id_info_user')
                ->select('forums.date_time', 'forums.isi_forum', 'info_users.nama_belakang')
                ->get();

          //return View::make('admin.dasboard')->with('count', $member);
         return view('admin.dashboard', compact('forum','announce', 'software', 'kategori', 'member', 'master', 'sumkategori1', 'sumkategori2', 'sumkategori3', 'sumkategori4', 'latest'));
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
