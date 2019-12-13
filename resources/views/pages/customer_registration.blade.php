@extends('master')
@section('content')

<script type="text/javascript">

//Create a boolean variable to check for a valid Internet Explorer instance.
var xmlhttp = false;
//Check if we are using IE.
try {
//If the Javascript version is greater than 5.
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//alert(xmlhttp);
//alert ("You are using Microsoft Internet Explorer.");
} catch (e) {
   // alert(e);
    
//If not, then use the older active x object.
try {
//If we are using Internet Explorer.
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
} catch (E) {
//Else we must be using a non-IE browser.
xmlhttp = false;
}
}
//alert(typeof XMLHttpRequest1);
//If we are using a non-IE browser, create a javascript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
xmlhttp = new XMLHttpRequest();
//alert ("You are not using Microsoft Internet Explorer");
}

function makerequest(email_address,objID)
 {
        //alert(email_address);
        //var obj = document.getElementById(objID);
        serverPage="ajax-email-check/"+email_address;
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	 {
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			//alert(xmlhttp.responseText);
                                            document.getElementById(objID).innerHTML = xmlhttp.responseText;
			//document.getElementById(objcw).innerHTML = xmlhttp.responseText;
                                            if(xmlhttp.responseText =="<label style='color:red'>Alredy Exists !</label>")
                                            {
                                                document.getElementById('r_btn').disabled=true;
                                            }
                                            if(xmlhttp.responseText == "<label style='color:green'>Avilable</label>")
                                            {
                                                document.getElementById('r_btn').disabled=false;
                                            }
		 }
	}
xmlhttp.send(null);
}

</script>
<div class="inner">
      <div class="breadcrumb"> <a href="index.html">Home</a> » <a href="cart.html">Cart</a> » Checkout </div>
      <h2 class="heading-title"><span>Checkout</span></h2>
      <div id="content"> 
        
        <!-- ACCORDION -->
        <div id="accordion" class="checkout">
          <h2><a href="#">Customer Login</a></h2>
          <div>
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required">*</span> Email Address:</td>
                  <td><input type="text" class="large-field" value="" name="email_address" /></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Password:</td>
                  <td><input type="text" class="large-field" value="" name="password"/></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="btn" value="Login"></td>
                </tr>
                
              </tbody>
            </table>
          </div>
        <h2><a href="#">Customer Registration</a></h2>
          <div>
             {!! Form::open(['url' => '/save-customer','method'=>'post']) !!}
            <table class="form">
              <tbody>
                <tr>
                  <td><span class="required">*</span> First Name:</td>
                  <td><input type="text" class="large-field" value="" name="first_name"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Last Name:</td>
                  <td><input type="text" class="large-field" value="" name="last_name"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Email Address:</td>
                  <td><input type="text" class="large-field" value="" name="email_address" onblur="makerequest(this.value,'res');"/><span id="res"></span></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Password:</td>
                  <td><input type="password" class="large-field" value="" name="password"/></td>
                </tr>
                <tr>
                  <td><span class="required">*</span> Mobile Number:</td>
                  <td><input type="text" class="large-field" value="" name="mobile"/></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" id="r_btn" name="btn" value="Registration"></td>
                </tr>
              </tbody>
            </table>
               {!! Form::close() !!}
          </div>
        </div>
        <!-- END OF ACCORDION --> 
        
      </div>
    </div>
@endsection;