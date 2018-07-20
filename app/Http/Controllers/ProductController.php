<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class ProductController extends Controller
{    

     public function AdminAuthCheck()
    {
        $admin_id =Session::get('admin_id');
        if($admin_id){
            return;
        }else{
            return Redirect::to('/admin')->send();
        }
    }


    public function index()
    {    
    	 $this->AdminAuthCheck();
    	return view('admin.add_product');
    }

    public function all_product()
    {
      $this->AdminAuthCheck();
    $all_product_info=DB::table('tbl_products')
           ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
           ->join('tbl_manufacture','tbl_products.manufac_id','=','tbl_manufacture.manufac_id')
           ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufac_name')
           ->get();
    
    $manage_product=view('admin.all_product')
        ->with('all_product_info',$all_product_info);
       return view('admin_layout')
            ->with('admin.all_product', $manage_product);
    }

    public function save_product(Request $request)
    {    $data=array();
    	$data['pro_name']=$request->pro_name;
    	$data['category_id']=$request->category_id;
    	$data['manufac_id']=$request->manufac_id;
    	$data['pro_des']=$request->pro_des;
    	$data['pro_l_des']=$request->pro_l_des;
    	$data['pro_price']=$request->pro_price;
    	$data['pro_size']=$request->pro_size;

    	$data['pro_color']=$request->pro_color;
    	$data['public_status']=$request->public_status;

    	$image=$request->file('pro_img');
    	if($image){
    		$image_name=str_random(20);
    		$ext=strtolower($image->getClientOriginalExtension());
    		$image_full_name=$image_name.'.'.$ext;
    		$uplode_path='image/';
    		$image_url=$uplode_path.$image_full_name;
    		$success=$image->move($uplode_path,$image_full_name);
    		if($success){
    			$data['pro_img']=$image_url;
    			DB::table('tbl_products')->insert($data);
    			Session::put('message','Product Added Successfuly !!');
    			return Redirect::to('/add_product');

    		}
    	}

       $data['pro_image']='';
       DB::table('tbl_products')->insert($data);
       Session::put('message', 'product added Successfuly without image');
       return Redirect::to('/add_product');


    }
    public function unactive_product($product_id)
    {
      DB::table('tbl_products')
        ->where('product_id',$product_id)
        ->update(['public_status' =>0 ]);
        Session::put('message','Product unactive successfuly !!');
        return Redirect::to('/all-product');
    }
    public function active_product($product_id)
    {
        DB::table('tbl_products')
        ->where('product_id',$product_id)
        ->update(['public_status' =>1 ]);
        Session::put('message','Product Activeted successfuly !!');
        return Redirect::to('/all-product');
    }
    public function delete_product($product_id)
    {
        DB::table('tbl_products')
        ->where('product_id',$product_id)
        ->delete();
        Session::get('message','Product deleted successfuly !');
        return Redirect::to('/all-product');

    }

}
