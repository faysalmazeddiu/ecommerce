@extends('master')
@section('content')
<div id="content_holder" class="fixed">
    <div class="inner">
      <div class="breadcrumb"> <a href="index.html">Home</a> » <a href="category.html">Pizza</a> » Pizza Delicioso </div>
      <h2 class="heading-title"><span>{{$product_info->product_name}}</span></h2>
      
      <!-- PRODUCT INFO -->
      <div class="product-info fixed">
        <div class="left">
            <div class="image"> <a href="" class="cloud-zoom" id="zoom1" rel="adjustX: 5, adjustY:0, zoomWidth:550, zoomHeight:400, showTitle: false"> <img src="{{URL::to($product_info->product_image)}}" alt='' title="Pizza Delicioso" width='400' height="400" /></a> <span class="pricetag">BDT {{$product_info->product_price}}</span> </div>
          <div class="image-additional">
            <div class="image_car_holder">
              <ul class="jcarousel-skin-opencart">
                <li><a href='image/bigimage00.jpg' class='cloud-zoom-gallery' title='Thumbnail 1' rel="useZoom: 'zoom1', smallImage: 'image/smallimage.jpg' "> <img src="image/tiny1.jpg" alt = "Thumbnail 1"/> </a></li>
                <li><a href='image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: 'image/smallimage1.jpg'"> <img src="image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                <li><a href='image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: 'image/smallimage2.jpg' "> <img src="image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
                <li><a href='image/bigimage00.jpg' class='cloud-zoom-gallery' title='Thumbnail 1' rel="useZoom: 'zoom1', smallImage: 'image/smallimage.jpg' "> <img src="image/tiny1.jpg" alt = "Thumbnail 1"/> </a></li>
                <li><a href='image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: 'image/smallimage1.jpg'"> <img src="image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                <li><a href='image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: 'image/smallimage2.jpg' "> <img src="image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
                <li><a href='image/bigimage01.jpg' class='cloud-zoom-gallery' title='Thumbnail 2' rel="useZoom: 'zoom1', smallImage: 'image/smallimage1.jpg'"> <img src="image/tiny2.jpg" alt = "Thumbnail 2"/> </a></li>
                <li><a href='image/bigimage02.jpg' class='cloud-zoom-gallery' title='Thumbnail 3' rel="useZoom: 'zoom1', smallImage: 'image/smallimage2.jpg' "> <img src="image/tiny3.jpg" alt = "Thumbnail 3"/> </a></li>
              </ul>
            </div>
            <script type="text/javascript"><!--
      $('.image-additional ul').jcarousel({
	  vertical: false,
	  visible: 4,
	  scroll: 1
      });
      //--></script> 
          </div>
        </div>
        <div class="right">
          <div class="description"> <span>Manufacturer:</span> <a href="#">{{$product_info->manufacturer_name}}</a><br/>
            
            <span>Availability:</span><?php if($product_info->product_quantity>0) echo ' In Stock'; else echo 'Out of Stock';?> 
            
            <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style "><script type="text/javascript">
      //<![CDATA[
            document.write('<a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>');
      //]]>
     </script> 
          </div>
          <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e7280075406aa87"></script> 
          <!-- AddThis Button END -->
            
            <div class="reviews"> <img alt="3 reviews" src="image/stars-5.png"/>
              <p>Based on <a href="#" title="Read reviews">3 reviews</a></p>
            </div>
          </div>
          
          <div class="cart"> <span class="label">Qty:</span>
            {!! Form::open(['url' => '/add-to-cart','method'=>'post']) !!}
              <input type="text" value="1" size="2" name="qty" id="qty"/>
              <input type="hidden" value="{{$product_info->id}}" size="2" name="product_id" id="qty"/>
              <button type="submit" class="button" id="button-cart" title="Add to Cart"><span>Add to Cart</span></button> <a href="#" class="wish_button" title="Add to Wish List">Add to Wish List</a> <a href="#" class="compare_button" title="Add to Compare">Add to Compare</a> </div>
            {!! Form::close() !!}
            <div class="tags"> <span class="label">Tags:</span> <a href="#">Pizza</a> <a href="#">Italian</a> <a href="#">Food</a> <a href="#">Delivery</a> <a href="#">Vegetarian</a> <a href="#">Sample tag</a> </div>
        </div>
        <div class="clear"></div>
      </div>
      <!-- END OF PRODUCT INFO -->
      
      <div id="content">
        <div class="box">
          <h2 class="heading-title"><span>Description</span></h2>
          <div class="box-content">
            <p>{{$product_info->product_long_description}}</p>
          </div>
        </div>
        <div class="box">
          <h2 class="heading-title"><span>Reviews (3)</span></h2>
          <div class="box-content box-rating"> <a class="comment_switch" href="#"> <span class="button_comments">View Comments</span> <span class="button_review">Write Review</span> </a>
            <div class="box-comments">
              <div class="content"> <span>Dimitar Koev | 05/09/2011</span> <img src="image/stars-5.png" alt="3 reviews"/>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
              <div class="content"> <span>Dimitar Koev | 05/09/2011</span> <img src="image/stars-1.png" alt="3 reviews"/>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
              <div class="content"> <span>Dimitar Koev | 05/09/2011</span> <img src="image/stars-4.png" alt="3 reviews"/>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
            </div>
            <div class="box-write">
              <h3 id="review-title">Write a review</h3>
              <span class="label">Your Name:</span>
              <input type="text" value="" name="name"/>
              <br/>
              <br/>
              <span class="label">Your Review:</span>
              <textarea style="width: 98%;" rows="10" cols="40" name="text"></textarea>
              <span style="font-size: 11px;"><span style="color: #FF0000;">Note:</span> HTML is not translated!</span><br/>
              <br/>
              <span class="label">Rating:</span> <span>Bad</span>&nbsp;
              <input type="radio" value="1" name="rating"/>
              &nbsp;
              <input type="radio" value="2" name="rating"/>
              &nbsp;
              <input type="radio" value="3" name="rating"/>
              &nbsp;
              <input type="radio" value="4" name="rating"/>
              &nbsp;
              <input type="radio" value="5" name="rating"/>
              &nbsp; <span>Good</span><br/>
              <br/>
              <span class="label">Enter the code in the box below:</span>
              <input type="text" value="" name="captcha"/>
              <br/>
              <img id="captcha" alt="" src="image/captcha.jpg"/><br/>
              <br/>
              <div class="buttons">
                <div class="left"><a class="button" id="button-review"><span>Submit Review</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="cat_list">
          <h2 class="heading-title"><span>Related Products</span></h2>
          <div class="prod_hold"> <a class="wrap_link" href="product.html">
            <span class="image"><img src="image/prod_pic1.jpg" alt="Spicylicious store" /></span>
            </a>
            <div class="pricetag_small"> <span class="old_price">$ 19 999,99</span> <span class="new_price">$ 14 999,99</span> </div>
            <div class="info">
              <h3>Very long product name goes here</h3>
              <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
              <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
          </div>
          <div class="prod_hold"> <a class="wrap_link" href="product.html">
            <span class="image"><img src="image/prod_pic2.jpg" alt="Spicylicious store" /></span>
            </a>
            <div class="pricetag_small"> <span class="price">$ 147,99</span> </div>
            <div class="info">
              <h3>Very long product name goes here</h3>
              <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
              <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
          </div>
          <div class="prod_hold"> <a class="wrap_link" href="product.html">
            <span class="image"><img src="image/prod_pic3.jpg" alt="Spicylicious store" /></span>
            </a>
            <div class="pricetag_small"> <span class="price">$ 472,99</span> </div>
            <div class="info">
              <h3>Very long product name goes here</h3>
              <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
              <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
          </div>
          <div class="prod_hold"> <a class="wrap_link" href="product.html">
            <span class="image"><img src="image/prod_pic4.jpg" alt="Spicylicious store" /></span>
            </a>
            <div class="pricetag_small"> <span class="price">$ 219,99</span> </div>
            <div class="info">
              <h3>Very long product name goes here</h3>
              <p>Suspendisse eget nunc lorem. Sed convallis mattis est, quis dignissim magna varius et.</p>
              <a class="add_to_cart_small" href="#">Add to cart</a> <a class="wishlist_small" href="#">Wishlist</a> <a class="compare_small" href="#">Compare</a> </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF CONTENT -->
  @endsection