@extends('master')
@section('slider')
<h2 class="heading-title"><span>Featured Products</span></h2>
          <div class="box-content">
            <ul id="myRoundabout">
                 <?php
          $product_info = DB::table('tbl_product')
                     ->select('*')
                     ->where('is_featured', 1)
                     ->where('publication_status', 1)
                     ->get();

          foreach( $product_info as $v_product)
          {
          ?>
              <li>
                  <div class="prod_holder"> <a href="product.html"> <img src="{{asset($v_product->product_image)}}" alt="Spicylicious store" width="450px" height="350px" /> </a>
                  <h3>{{$v_product->product_name}}</h3>
                </div>
                <span class="pricetag">BDT {{$v_product->product_price}}</span> 
              </li>
          <?php } ?>
            </ul>
            <a href="#" class="previous_round">Previous</a> <a href="#" class="next_round">Next</a> </div>
            @endsection