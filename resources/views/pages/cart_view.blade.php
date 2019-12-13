@extends('master')
@section('content')
<div id="content_holder" class="fixed">
    <div class="inner">
      <div class="breadcrumb"> <a href="index.html">Home</a> » <a href="account.html">Account</a> » Shopping Cart</div>
      <h2 class="heading-title"><span>Shopping Cart (4.90 kg)</span></h2>
      <div id="content">
        <div class="cart-info">
          <table>
            <thead>
              <tr>
                <td class="image">Image</td>
                <td class="name">Product Name</td>
                <td class="quantity">Quantity</td>
                <td class="price">Unit Price</td>
                <td class="total">Sub Total</td>
              </tr>
            </thead>
            <tbody>
              <?php
              
              $contents=Cart::content();
//              echo '<pre>';
//              print_r($contents);
              foreach($contents as $v_contents)
              {
              ?>
                
                <tr>
                <td class="image"><a href="product.html"><img width="50" height="50" src="{{$v_contents->options['image']}}" alt="Spicylicious store" /></a></td>
                <td class="name"><a href="product.html">{{$v_contents->name}}</a> <span class="stock">***</span>
                  <div> </div></td>
                <td class="quantity">
                     {!! Form::open(['url' => '/update-cart','method'=>'post']) !!}
                    <input type="text" size="3" value="{{$v_contents->qty}}" name="qty"/>
                    <input type="hidden" size="3" value="{{$v_contents->rowId}}" name="rowid"/>
                    <button type="submit" name="btn" value="Update">Update</button>
                    <a href="{{URL::to('/remove-from-cart/'.$v_contents->rowId)}}">Remove</a>
                     {!! Form::close() !!}
                </td>
                <td class="price">BDT {{$v_contents->price}}</td>
                <td class="total">BDT {{$v_contents->subtotal}}</td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <div class="cart-module">
          
        </div>
        <div class="cart-total">
          <table>
            <tbody>
              <tr>
                <td colspan="5"></td>
                <td class="right"><b>Total:</b></td>
                <td class="right numbers">BDT {{Cart::total()}}</td>
              </tr>
              <tr>
                <td colspan="5"></td>
                <td class="right"><b>VAT 4.5%:</b></td>
                <td class="right numbers">
                    <?php
                        $total=(double) str_replace(',','',Cart::total());
                        //echo '-----'.$total;
                        //exit();
                        $vat =   ( ($total * 4.5) / 100);
                        echo 'BDT '.$vat;
                    ?>
                </td>
              </tr>
              <tr>
                <td colspan="5"></td>
                <td class="right numbers_total"><b>Grand Total:</b></td>
                <td class="right numbers_total">
                    BDT &nbsp;{{ $grand_total=$total + $vat}}
                    <?php
                        Session::put('grand_total',$grand_total);
                    ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="buttons">
          <div class="left"><a class="button" onclick="#"><span>Update</span></a></div>
          
          <?php
          $customer_id=Session::get('customer_id');
          $shipping_id=Session::get('shipping_id');
          if($customer_id != NULL && $shipping_id == NULL)
          {
          ?>
          <div class="right"><a class="button" href="{{URL::to('/shipping-details')}}"><span>Checkout</span></a></div>
          <?php } 
          else if($customer_id != NULL && $shipping_id != NULL)
          {
          ?>
          <div class="right"><a class="button" href="{{URL::to('/payment')}}"><span>Checkout</span></a></div>
          <?php
          }
              else { ?>
          <div class="right"><a class="button" href="{{URL::to('/customer-registration')}}"><span>Checkout</span></a></div>
          <?php } ?>
          <div class="center"><a class="button" href="#"><span>Continue Shopping</span></a></div>
        </div>
      </div>
    </div>
  </div>
@endsection