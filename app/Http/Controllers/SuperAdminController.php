<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;

use Illuminate\Support\Facades\Redirect;
//session_start();
class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct() {
       
    }
    public function index()
    {
       $admin_id=Session::get('admin_id');
       if($admin_id ==NULL)
        {
            return Redirect::to('/adda')->send();
        }
        $dashboard_content=view('admin.pages.dashboard_content');
        return view('admin.admin_master')
                        ->with('main_content',$dashboard_content);
    }
    public function add_category()
    {
        $admin_id=Session::get('admin_id');
       if($admin_id ==NULL)
        {
            return Redirect::to('/adda')->send();
        }
        $add_category=view('admin.pages.add_category');
        return view('admin.admin_master')
                        ->with('main_content',$add_category);
      
        }
        
        public function save_category(Request $request)
        {
            $data=array();
            $data['category_name']=$request->category_name;
            $data['category_description']=$request->category_description;
            $data['publication_status']=$request->publication_status;
            DB::table('tbl_category')
                    ->insert($data);
            Session::put('message','Save category information sucessfully !');
            
           return Redirect::to('/add-category'); 
        }
        public function manage_category()
        {
            
            $category_info = DB::table('tbl_category')
                     ->select('*')
                     ->get();
            $manage_category=view('admin.pages.manage_category')->with('category_info',$category_info);
            return view('admin.admin_master')
                        ->with('main_content',$manage_category);
      
        }
        public function unpublished_category($category_id)
        {
           DB::table('tbl_category')
            ->where('id', $category_id)
            ->update(['publication_status' => 0]);
           return Redirect::to('/manage-category');
        }
        public function published_category($category_id)
        {
           DB::table('tbl_category')
            ->where('id', $category_id)
            ->update(['publication_status' => 1]);
           return Redirect::to('/manage-category');
        }
        public function delete_category($category_id)
        {
           DB::table('tbl_category')
            ->where('id', $category_id)
            ->delete();
           return Redirect::to('/manage-category');
        }
        public function edit_category($category_id)
        {
            $category_info=DB::table('tbl_category')
                                            ->select('*')
                                            ->where('id',$category_id)
                                            ->first();
            $edit_category=view('admin.pages.edit_category')->with('category_info',$category_info);
            return view('admin.admin_master')->with('main_content',$edit_category);
        }
        public function update_category(Request $request)
        {
            $data=array();
            $data['category_name']=$request->category_name;
            $data['category_description']=$request->category_description;
            $data['publication_status']=$request->publication_status;
            $category_id=$request->category_id;
            DB::table('tbl_category')
            ->where('id',$category_id)
            ->update($data);
            return Redirect::to('/manage-category');
        }
        public function add_manufacturer()
        {
         
        $add_manufacturer=view('admin.pages.add_manufacturer');
        return view('admin.admin_master')
                        ->with('main_content',$add_manufacturer);
      
        }
        public function save_manufacturer(Request $request)
        {
            $data=array();
            $data['manufacturer_name']=$request->manufacturer_name;
            $data['manufacturer_description']=$request->manufacturer_description;
            $data['publication_status']=$request->publication_status;
            DB::table('tbl_manufacturer')
                    ->insert($data);
            Session::put('message','Save manufacturer information sucessfully !');
            
           return Redirect::to('/add-manufacturer'); 
        }
        public function manage_manufacturer()
        {
             $manufacturer_info = DB::table('tbl_manufacturer')
                     ->select('*')
                     ->get();
            $manage_manufacturer=view('admin.pages.manage_manufacturer')->with('manufacturer_info',$manufacturer_info);
            return view('admin.admin_master')
                        ->with('main_content',$manage_manufacturer);
      
        }
        public function unpublished_manufacturer($manufacturer_id)
        {
           DB::table('tbl_manufacturer')
            ->where('id', $manufacturer_id)
            ->update(['publication_status' => 0]);
           return Redirect::to('/manage-manufacturer'); 
        }
        public function published_manufacturer($manufacturer_id)
        {
           DB::table('tbl_manufacturer')
            ->where('id', $manufacturer_id)
            ->update(['publication_status' => 1]);
           return Redirect::to('/manage-manufacturer'); 
        }
        public function delete_manufacturer($manufacturer_id)
        {
            DB::table('tbl_manufacturer')
            ->where('id', $manufacturer_id)
            ->delete();
           return Redirect::to('/manage-manufacturer');
        }
        public function edit_manufacturer($manufacturer_id)
        {
            $manufacturer_info=DB::table('tbl_manufacturer')
                                            ->select('*')
                                            ->where('id',$manufacturer_id)
                                            ->first();
            $edit_manufacturer=view('admin.pages.edit_manufacturer')->with('manufacturer_info',$manufacturer_info);
            return view('admin.admin_master')->with('main_content',$edit_manufacturer);
        }
        public function update_manufacturer(Request $request)
        {
            $data=array();
            $data['manufacturer_name']=$request->manufacturer_name;
            $data['manufacturer_description']=$request->manufacturer_description;
            $data['publication_status']=$request->publication_status;
            $manufacturer_id=$request->manufacturer_id;
            DB::table('tbl_manufacturer')
            ->where('id',$manufacturer_id)
            ->update($data);
            return Redirect::to('/manage-manufacturer');
        }
        public function add_product()
        {
            $category_info = DB::table('tbl_category')
                     ->select('*')
                     ->where('publication_status',1)
                     ->get(); 
            $manufacturer_info = DB::table('tbl_manufacturer')
                     ->select('*')
                     ->where('publication_status',1)
                     ->get(); 
            $add_product=view('admin.pages.add_product')
                                    ->with('category_info',$category_info)
                                    ->with('manufacturer_info',$manufacturer_info);
              return view('admin.admin_master')
                        ->with('main_content',$add_product);
      
        }
        public function save_product(Request $request)
        {
            $data=array();
            $data['product_name']=$request->product_name;
            $data['category_id']=$request->category_id;
            $data['manufacturer_id']=$request->manufacturer_id;
            $data['product_price']=$request->product_price;
            $data['product_quantity']=$request->product_quantity;
            $data['reorder_label']=$request->reorder_label;
//            echo $request->is_featured;
//            exit();
            if($request->is_featured=='on')
            {
            $data['is_featured']=1;
            }
            else{
                $data['is_featured']=0;
            }
            
            $data['product_short_description']=$request->product_short_description;
            $data['product_long_description']=$request->product_long_description;
            $data['publication_status']=$request->publication_status;
            $image_url=$this->product_image_upload($request);
            $data['product_image']=$image_url;
            
             DB::table('tbl_product')
                    ->insert($data);
           Session::put('message','Save Product Information Successfully !'); 
           return Redirect::to('add-product');
        }
        private function product_image_upload($request)
        {
            $image = $request->file('product_image');
//            echo '<pre>';
//            print_r($image);
//            exit();
            if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif') {
                echo 'File Type is not Valid.please try new one';
                exit();
            } else {
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'public/product_image/';
                $image_url = 'public/product_image/'. $image_full_name;
                $success = $image->move($upload_path, $image_full_name);
                if($success)
                {
                    return $image_url;
                }
                else{
                    $errors=$image->getErrorMessage();
                }
            }
        }
        else{
            
        }
        }
        
        public function manage_product() {
            
            $product_info = DB::table('tbl_product')
                     ->select('*')
                     ->get();
            $manage_product=view('admin.pages.manage_product')->with('product_info',$product_info);
            return view('admin.admin_master')
                        ->with('main_content',$manage_product);
        }
        
        public function unpublished_product($product_id)
        {
           DB::table('tbl_product')
            ->where('id', $product_id)
            ->update(['publication_status' => 0]);
           return Redirect::to('/manage-product'); 
        }
        
        public function published_product($product_id)
        {
           DB::table('tbl_product')
            ->where('id', $product_id)
            ->update(['publication_status' => 1]);
           return Redirect::to('/manage-product'); 
        }
        
        public function edit_product($product_id) {
            
            $category_info = DB::table('tbl_category')
                     ->select('*')
                     ->where('publication_status',1)
                     ->get(); 
            $manufacturer_info = DB::table('tbl_manufacturer')
                     ->select('*')
                     ->where('publication_status',1)
                     ->get(); 
            
            $product_info=DB::table('tbl_product')
                              ->join('tbl_category', 'tbl_product.category_id', '=', 'tbl_category.id')
                              ->join('tbl_manufacturer', 'tbl_product.manufacturer_id', '=', 'tbl_manufacturer.id')
                              ->select('tbl_product.*', 'tbl_category.category_name', 'tbl_manufacturer.manufacturer_name')
                              ->where('tbl_product.id', $product_id)
                              ->first();
            
            $edit_product=view('admin.pages.edit_product')
                    ->with('product_info', $product_info)
                    ->with('category_info', $category_info)
                    ->with('manufacturer_info', $manufacturer_info);
            
            return view('admin.admin_master')->with('main_content', $edit_product);
        }
        
        public function update_product(Request $request) {
            $data=array();
            $data['product_name']=$request->product_name;
            $data['category_id']=$request->category_id;
            $data['manufacturer_id']=$request->manufacturer_id;
            $data['product_price']=$request->product_price;
            $data['product_quantity']=$request->product_quantity;
            $data['reorder_label']=$request->reorder_label;
//            echo $request->is_featured;
//            exit();
            if($request->is_featured=='on')
            {
            $data['is_featured']=1;
            }
            else{
                $data['is_featured']=0;
            }
            
            $data['product_short_description']=$request->product_short_description;
            $data['product_long_description']=$request->product_long_description;
            $data['publication_status']=$request->publication_status;
            $image_url=$this->product_image_update($request);
            $data['product_image']=$image_url;
            
            $product_id = $request->product_id;
             DB::table('tbl_product')
                     ->where('id', $product_id)
                     ->update($data);
            
           return Redirect::to('manage-product');
        }
        
        private function product_image_update($request)
        {
            $image = $request->file('product_image');
//            echo '<pre>';
//            print_r($image);
//            exit();
            if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif') {
                echo 'File Type is not Valid.please try new one';
                exit();
            } else {
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'public/product_image/';
                $image_url = 'public/product_image/'. $image_full_name;
                $success = $image->move($upload_path, $image_full_name);
                if($success)
                {
                    if($request->product_image_url !=NULL)
                    {
                            
                    unlink($request->product_image_url);
                    }
                    return $image_url;
                }
                else{
                    $errors=$image->getErrorMessage();
                }
            }
        }  else {
            $image_url=$request->product_image_url;
            return $image_url;
        }
        
        }
        
        public function delete_product($product_id) {
            
            $product_image = DB::table('tbl_product')
                    ->select('product_image')
                    ->where('id', $product_id)
                    ->first();
            $url = $product_image->product_image;
            unlink($url);
            //$unlink_url= $_SERVER['DOCUMENT_ROOT'].'/tt_lict_php_batch01_ecommerce/public/'.$url;
            
            DB::table('tbl_product')
                    ->where('id', $product_id)
                    ->delete();
            
            return Redirect::to('/manage-product');
        }

        public function logout()
    {
        Session::put('admin_id',null);
        Session::put('admin_name',null);
        Session::put('message','You are logout successfully !');
        
        return Redirect::to('/adda');
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
