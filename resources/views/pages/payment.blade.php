@extends('master')
@section('content')
<div>
    <div id="accordion" class="checkout">
            <p>Please select the preferred payment method to use on this order.</p>
             {!! Form::open(['url' => '/confirm-order','method'=>'post']) !!}
            <table class="form">
              <tbody>
                <tr>
                  <td style="width: 1px;"><input type="radio" checked="checked" id="cod"  name="payment_type" value="paypal" /></td>
                  <td><label for="cod">PayPal</label></td>
                </tr>
               <tr>
                  <td style="width: 1px;"><input type="radio" id="tod"  name="payment_type" value="cash_on_delivery"/></td>
                  <td><label for="tod">Cash On Delivery</label></td>
                </tr>
              </tbody>
            </table>
            <b>Add Comments About Your Order</b>
            <textarea style="width: 98%;" rows="8" cols="20" name="comment"></textarea>
            <br/>
            <br/>
            <div class="buttons">
              <div class="right">I have read and agree to the <a href="http://metagraphics.eu/cartmania1_5/index.php?route=information/information/info&amp;information_id=5" class="fancybox"><b>Terms &amp; Conditions</b></a>
                <input type="checkbox" value="1" name="agree"/>
                <input type="submit" class="button" value="Confirm Oreder" id="button-payment"></div>
            </div>
            </div>
      {!! Form::close() !!}
@endsection