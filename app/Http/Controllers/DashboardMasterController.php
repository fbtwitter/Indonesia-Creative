<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\sub_course;

class DashboardMasterController extends Controller
{
    //index

    public function index(Request $request){
        /*if(isset($request)){
            $id=$request->session()->get('key');
            if($id!=null){
              $data = DB::table('info_users')->where('id_info_user',$id)->get();
              $hak = DB::table('logins')->select('hak_akses')->where('id_info_user',$id)->get();
              foreach ($hak as $h) {
                  $hk = $h->hak_akses;
                }
              switch ($hk) {
                case 3:
                  $hak = "Student";
                  return view('Dashboard.index', compact('data'))->with('status',$hak);
                  break;
                case 2:
                  $hak = "Master";
                  return view('master.dashboardMaster', compact('data'))->with('status',$hak);
                  break;
                default:
                  $hak = "Undefined";
                  break;
              }
              return view('Dashboard.index', compact('data'))->with('status',$hak);
            }
  
            else
              echo "<script>window.location.href='/'</script>";
          }else
            echo "<script>window.location.href='/'</script>";*/
          return back();
    }
}
