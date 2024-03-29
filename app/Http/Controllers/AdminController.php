<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

//use App\Http\Requests;
use DB;
use Session;

class AdminController extends Controller
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
        if($admin_id !=NULL)
        {
            return Redirect::to('/dashboard')->send();
        }
        return view('admin.admin_login');
     }
     
     public function admin_login_check(Request $request)
     {
         $admin_email_address=$request->admin_email_address;
         $admin_password=md5($request->admin_password);
         
         $admin_info=DB::table('tbl_admin')
                ->select('*')
                 ->where('admin_email_address',$admin_email_address)
                 ->where('admin_password',$admin_password)
                 ->first();
     // $sql="SELECT * FROM tbl_admin WHERE admin_email_address='$admin_email_address' AND admin_password='$admin_password' ";
//         echo '<pre>';
//         print_r($admin_info);
//         exit();
      if($admin_info)
      {
          Session::put('admin_id',$admin_info->id);
          Session::put('admin_name',$admin_info->admin_name);
          
          return Redirect::to('/dashboard');
      }
      else{
          Session::put('exception','User Id Or Password Invalide');
         return Redirect::to('/adda');
      }
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
