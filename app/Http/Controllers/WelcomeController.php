<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latest_product=view('pages.latest_product');
        $slider=view('pages.slider');
        
        return view('master')
                    ->with('content',$latest_product)
                    ->with('slider',$slider);
    }
    public function about_us()
    {
        $about_us=view('pages.about_us');
        return view('master')
                    ->with('content',$about_us);
                    
    }
    public function category_product($category_id)
    {
        $category_product = DB::table('tbl_product')
                     ->join('tbl_category', 'tbl_product.category_id', '=', 'tbl_category.id')
                     ->select('tbl_product.*','tbl_category.category_name')
                     ->where('tbl_product.publication_status', 1)
                     ->where('category_id',$category_id)
                     ->get();
//        echo '<pre>';
//        print_r($category_product);
//        exit();
        $category_product_page=view('pages.category_product')
                                                ->with('category_product',$category_product);
        $slider=view('pages.slider');
        return view('master')
                    ->with('content',$category_product_page)
                    ->with('slider',$slider);

    }
    public function manufacturer_product($manufacturer_id)
    {
        $manufacturer_product = DB::table('tbl_product')
                     ->select('*')
                     ->where('publication_status', 1)
                     ->where('manufacturer_id',$manufacturer_id)
                     ->get();
        $manufacturer_product_page=view('pages.manufacturer_product')
                                                ->with('manufacturer_product',$manufacturer_product);
        $slider=view('pages.slider');
        return view('master')
                    ->with('content',$manufacturer_product_page)
                    ->with('slider',$slider);

    }
    public function product_details($product_id)
    {
        $product_info=DB::table('tbl_product')
                     ->join('tbl_manufacturer','tbl_product.manufacturer_id','=','tbl_manufacturer.id')
                     ->where('tbl_product.publication_status', 1)
                     ->where('tbl_product.id',$product_id)
                     ->select('tbl_product.*','tbl_manufacturer.manufacturer_name')
                     ->first();
        
        $product_details=view('pages.product_details')
                                    ->with('product_info',$product_info);
                                                
        
        return view('master')
                    ->with('content',$product_details);
                    

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
