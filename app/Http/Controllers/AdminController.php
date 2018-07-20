<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Admin; 
class AdminController extends Controller
{
    public function index()
    {
    	return view('admin_login');
    }

    
    public function login(Request $request)
    {

      $admin_email=$request->admin_Email;
     
// dashboard ka url dekhobkia dya h 
      $admin_password=md5($request->admin_Password);

      $result = Admin::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
      // $result=DB::table('tbl_admin')
      //      //->where('admin_email',$admin_email)
      //      //->where('admin_password',$admin_password)
      //      ->first();
           

          
           if ($result){
                 Session::put('admin_name',$result->admin_name);
                  Session::put('admin_id',$result->admin_id);
                return   Redirect::to('/dashbord');       
           }else{
                Session::put('massege','Email or password invalid');
             return     Redirect::to('/admin');
           }
           
    }
}
