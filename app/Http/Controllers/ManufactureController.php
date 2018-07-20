<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class ManufactureController extends Controller
{
    public function index()
    {
    	return view('admin.add_manufacture');
    }
    public function save_manufacture(Request $request)
    {
    	$data= array();
    	$data['manufac_id']=$request->manufac_id;
    	$data['manufac_name']=$request->manufac_name;
    	$data['manufac_des']=$request->manufac_des;
    	$data['public_status']=$request->public_status;
    	DB::table('tbl_manufacture')->insert($data);
    	Session::put('message','Manufacture added successfuly !!');
    	return Redirect::to('/add-manufacture');
    }

    public function all_manufacture()
    {
    	$all_manufacture_info=DB::table('tbl_manufacture')->get();
    $manage_manufacture=view('admin.all_manufacture')
        ->with('all_manufacture_info',$all_manufacture_info);
       return view('admin_layout')
            ->with('admin.all_manufacture', $manage_manufacture);

    }

     public function delete_manufacture($manufac_id)
    {
        DB::table('tbl_manufacture')
        ->where('manufac_id',$manufac_id)
        ->delete();
        Session::get('message','Manufacture deleted successfuly !');
        return Redirect::to('/all-manufacture');

    }
     public function unactive_manufacture($manufac_id)
    {
        DB::table('tbl_manufacture')
        ->where('manufac_id',$manufac_id)
        ->update(['public_status' =>0 ]);
        Session::put('message','Manufacture unactive successfuly !!');
        return Redirect::to('/all-manufacture');
    }

    public function active_manufacture($manufac_id)
    {
        DB::table('tbl_manufacture')
        ->where('manufac_id',$manufac_id)
        ->update(['public_status' =>1 ]);
        Session::put('message','Manufacture Activeted successfuly !!');
        return Redirect::to('/all-manufacture');
    }
     public function edit_manufacture($manufac_id)
    {

     $manufacture_info= DB::table('tbl_manufacture')
      ->where('manufac_id',$manufac_id)
          ->first();
          $manufacture_info=view('admin.edit_manufacture')
        ->with('manufacture_info',$manufacture_info);
       return view('admin_layout')
            ->with('admin.edit_manufacture', $manufacture_info);

    // return view('admin.edit_category');
    }
    public function update_manufacture(Request $request,$manufac_id)
    {
        $data=array();
        $data['manufac_name']=$request->manufac_name;
        $data['manufac_des']=$request->manufac_des;
        
        DB::table('tbl_manufacture')
        ->where('manufac_id',$manufac_id)
        ->update($data);

        Session::get('message','Manufacture update successfuly !');
        return Redirect::to('/all-manufacture');

}
}