<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function customer_registration()
    {
        $customer_registration=view('pages.customer_registration');
        return view('master')->with('content',$customer_registration);
    }
    public function ajax_email_check($email_address)
    {
         $customer_info = DB::table('tbl_customer')
                ->select("*")
                ->where("email_address",$email_address)
                ->first();
         
         if($customer_info)
         {
             echo "<label style='color:red'>Alredy Exists !</label>";
         }
         else{
             echo "<label style='color:green'>Avilable</label>";
         }
         
    }
    public function save_customer(Request $request)
    {
        $data=array();
        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['email_address']=$request->email_address;
        $data['password']=md5($request->password);
        $data['mobile']=$request->mobile;
        
        $customer_id=DB::table('tbl_customer')
                    ->insertGetId($data);
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$data['first_name'].' '.$data['last_name']);
        return Redirect::to('/billing-info');
    }
    public function billing_info()
    {
        $customer_id=Session::get('customer_id');
        $customer_info = DB::table('tbl_customer')
                ->select("*")
                ->where("customer_id",$customer_id)
                ->first();
        
          
        $billing_details=view('pages.billing_details')->with('customer_info',$customer_info);
        return view('master')->with('content',$billing_details);
    }
    public function update_customer(Request $request)
    {
        $data=array();
        $customer_id=$request->customer_id;
        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['email_address']=$request->email_address;
        $data['mobile']=$request->mobile;
        $data['address']=$request->address;
        $data['city']=$request->city;
        $data['country']=$request->country;
        $data['zip_code']=$request->zip_code;
        DB::table('tbl_customer')
                ->where("customer_id",$customer_id)
                ->update($data);
        
       return Redirect::to('/shipping-details');
        
    }
    
    public function shipping_details()
    {
         $shipping_details=view('pages.shipping_details');
         return view('master')->with('content',$shipping_details);
    }
    public function save_shipping(Request $request)
    {
        $data=array();
        
        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['email_address']=$request->email_address;
        $data['mobile']=$request->mobile;
        $data['address']=$request->address;
        $data['city']=$request->city;
        $data['country']=$request->country;
        $data['zip_code']=$request->zip_code;
        $shipping_id=DB::table('tbl_shipping_details')
                
                ->insertGetId($data);
        Session::put('shipping_id',$shipping_id);
        
       return Redirect::to('/payment');
    }
    public function payment()
    {
         $payment=view('pages.payment');
         return view('master')->with('content',$payment);
    }

    public function customer_logout()
    {
        Session::put('customer_id',null);
        Session::put('customer_name',null);
        return Redirect::to('/');
    }
    public function confirm_order(Request $request)
    {
        $payment_type=$request->payment_type;
        
        $data['payment_type']=$payment_type;
        
        $payment_id=DB::table('tbl_payment')
                ->insertGetId($data);
       
        $odata=array();
        $odata['customer_id']=Session::get('customer_id');
        $odata['shipping_id']=Session::get('shipping_id');
        $odata['payment_id']=$payment_id;
        $odata['order_total']=Session::get('grand_total');
        $order_id=DB::table('tbl_order')
                               ->insertGetId($odata);
        
        $contents=Cart::content();
        $oddata=array();
       foreach($contents as $v_contents)
       {
           $oddata['order_id']=$order_id;
           $oddata['product_id']=$v_contents->id;
           $oddata['product_name']=$v_contents->name;
           $oddata['product_price']=$v_contents->price;
           $oddata['product_sales_quantity']=$v_contents->qty;
           
           DB::table('tbl_order_details')
                   ->insert($oddata);
           
       }
        
        
        
        if($payment_type == 'paypal')
        {
             /*
             * Start Email
             */
            
            
            return view('pages.htmlWebsiteStandardPayment');
            
        }
        if($payment_type == 'cash_on_delivery')
        {
            /*
             * Start Email
             */
            Cart::destroy();
            return Redirect::to('/order-successfull');
        }
        
    }
    public function order_successfull()
    {
        $order_successfull=view('pages.order_successfull');
        return view('master')->with('content',$order_successfull);
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
