<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//
//Route::get('/', function () {
//    return view('master');
//});
Route::get('/','WelcomeController@index');
Route::get('/about-us','WelcomeController@about_us');
Route::get('/category-product/{id}.html','WelcomeController@category_product');
Route::get('/manufacturer-product/{id}.html','WelcomeController@manufacturer_product');

/*
 * Product
 */
Route::get('/product-details/{id}','WelcomeController@product_details');
/*
 * Start Cart
 */
Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/remove-from-cart/{id}','CartController@remove_from_cart');
Route::post('/update-cart','CartController@update_cart');
/*
 * Start Checkout
 */
Route::get('/customer-registration','CheckoutController@customer_registration');
Route::get('/ajax-email-check/{id}','CheckoutController@ajax_email_check');
Route::post('/save-customer','CheckoutController@save_customer');
Route::get('/billing-info','CheckoutController@billing_info');
Route::post('/update-customer','CheckoutController@update_customer');
Route::get('/shipping-details','CheckoutController@shipping_details');
Route::get('/customer-logout','CheckoutController@customer_logout');

Route::post('/save-shipping','CheckoutController@save_shipping');
Route::get('/payment','CheckoutController@payment');
Route::post('/confirm-order','CheckoutController@confirm_order');
Route::get('/order-successfull','CheckoutController@order_successfull');


/*
 * Admin Routes start
 */
Route::get('/adda','AdminController@index');
Route::post('/admin-login-check','AdminController@admin_login_check');
Route::get('/dashboard','SuperAdminController@index');
Route::get('/add-category','SuperAdminController@add_category');
Route::post('/save-category','SuperAdminController@save_category');
Route::get('/manage-category','SuperAdminController@manage_category');
Route::get('/unpublished-category/{id}','SuperAdminController@unpublished_category');
Route::get('/published-category/{id}','SuperAdminController@published_category');
Route::get('/delete-category/{id}','SuperAdminController@delete_category');
Route::get('/edit-category/{id}','SuperAdminController@edit_category');
Route::post('/update-category/','SuperAdminController@update_category');


Route::get('/add-manufacturer/','SuperAdminController@add_manufacturer');
Route::post('/save-manufacturer/','SuperAdminController@save_manufacturer');
Route::get('/manage-manufacturer/','SuperAdminController@manage_manufacturer');
Route::get('/unpublished-manufacturer/{id}','SuperAdminController@unpublished_manufacturer');
Route::get('/published-manufacturer/{id}','SuperAdminController@published_manufacturer');
Route::get('/delete-manufacturer/{id}','SuperAdminController@delete_manufacturer');
Route::get('/edit-manufacturer/{id}','SuperAdminController@edit_manufacturer');
Route::post('/update-manufacturer/','SuperAdminController@update_manufacturer');

Route::get('/add-product','SuperAdminController@add_product');
Route::post('/save-product','SuperAdminController@save_product');
Route::get('/manage-product','SuperAdminController@manage_product');
Route::get('/unpublished-product/{id}','SuperAdminController@unpublished_product');
Route::get('/published-product/{id}','SuperAdminController@published_product');
Route::get('/edit-product/{id}','SuperAdminController@edit_product');
Route::post('/update-product','SuperAdminController@update_product');
Route::get('/delete-product/{id}','SuperAdminController@delete_product');


Route::get('/logout','SuperAdminController@logout');





