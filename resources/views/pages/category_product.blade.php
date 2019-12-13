@extends('master')
@section('content')
<h2 class="heading-title"><span>{{$category_product[0]->category_name}} Category Products</span></h2>
          <div class="box-content">
            <div class="box-product fixed">
             
<?php
          foreach( $category_product as $v_product)
          {
          ?>
                <div class="prod_hold"> <a class="wrap_link" href="product.html"> <span class="image"><img src="{{asset('public/'.$v_product->product_image)}}" width='180' height="180" alt="Spicylicious store" /></span> </a>
                <div class="pricetag_small"> <!--<span class="old_price">$ 19 999,99</span> --><span class="new_price">BDT {{$v_product->product_price}}</span> </div>
                <div class="info">
                  <h3>{{$v_product->product_name}}</h3>
                  <p>{{$v_product->product_short_description}}</p>
                  <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
              </div>
          <?php } ?>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        @endsection