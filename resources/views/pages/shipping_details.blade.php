@extends('master')
@section('content')
<div id="accordion" class="checkout">
<h2><a href="#">Shipping Details</a></h2>
          <div>
              {!! Form::open(['url' => '/save-shipping','method'=>'post']) !!}
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required">*</span> First Name:</td>
                  <td>
                      <input type="text" class="large-field" value="" name="first_name"/>
                      
                  </td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Last Name:</td>
                  <td><input type="text" class="large-field" value="" name="last_name"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Email Address:</td>
                  <td>
                      <input type="text" class="large-field" value="" name="email_address"/>
                  </td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Mobile Number:</td>
                  <td><input type="text" class="large-field" value="" name="mobile"/></td>
                </tr>
               
                <tr>
                  <td><span class="required">*</span> Address :</td>
                  <td><input type="text" class="large-field" value="" name="address"/></td>
                </tr>
               
                  <td><span class="required">*</span> City:</td>
                  <td><input type="text" class="large-field" value="" name="city"/></td>
                </tr>
                
                <tr>
                  <td><span class="required">*</span> Country:</td>
                  <td><select class="large-field" name="country">
                      <option value=" "> --- Please Select --- </option>
                      <script type="text/javascript">
                          printCountryOptions();
                      </script>
                      
                    </select></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Zip Code:</td>
                  <td><input type="text" class="large-field" value="" name="zip_code"/></td>
                </tr>
                
                <tr>
                  <td><span class="required"></td>
                  <td><input type="submit" class="large-field" value="Next >>" name="zip_code"/></td>
                </tr>
                
              </tbody>
            </table>
             {!! Form::close() !!}
          </div>
</div>
@endsection