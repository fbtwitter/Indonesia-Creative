<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forum;
use Carbon\Carbon;
use DB;

class AdminForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $forums = forum::all()->toArray();
        return view('admin.forum', compact('forums'));
        $forums = forum::all()->toArray();
        return view('forum', compact('forums'));


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
          'ISI_FORUM' => 'required',
        ]);

        $chats = new forum([
          'ID_INFO_USER' => 14,
          'ISI_FORUM' => $request->get('ISI_FORUM'),
          'DATE_TIME' => Carbon::now(),
        ]);

        $chats->save();
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
    public function delete($id_forum){
        forum::find($id_forum)->delete();
        return redirect(url('adminforum'));
    }

    public function chat(){
      $forumchat = DB::table('info_users')
          ->join('forums', 'info_users.id_info_user', '=', 'forums.id_info_user')
          ->select('forums.date_time', 'forums.isi_forum', 'info_users.nama_belakang')
          ->get();
      return view('admin.forumadmin', compact('forumchat'));
    }

}
?>
