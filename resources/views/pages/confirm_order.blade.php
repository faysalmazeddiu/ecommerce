  <h2><a href="#">Payment Method</a></h2>
          <div>
            <p>Please select the preferred payment method to use on this order.</p>
            <table class="form">
              <tbody>
                <tr>
                  <td style="width: 1px;"><input type="radio" checked="checked" id="cod" value="cod" name="payment_method"/></td>
                  <td><label for="cod">PayPal</label></td>
                </tr>
                <tr>
                  <td style="width: 1px;"><input type="radio" id="mod" value="cod" name="payment_method"/></td>
                  <td><label for="mod">MoneyBookers</label></td>
                </tr>
                <tr>
                  <td style="width: 1px;"><input type="radio" id="tod" value="cod" name="payment_method"/></td>
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
                <a class="button" id="button-payment"><span>Continue</span></a></div>
            </div>
          </div>
          <h2><a href="#">Confirm Order</a></h2>
          <div class="checkout-product">
            <table>
              <thead>
                <tr>
                  <td class="name">Product Name</td>
                  <td class="model">Model</td>
                  <td class="quantity">Quantity</td>
                  <td class="price">Price</td>
                  <td class="total">Total</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="name"><a href="http://metagraphics.eu/cartmania1_5/index.php?route=product/product&amp;product_id=44">MacBook Air</a></td>
                  <td class="model">Product 17</td>
                  <td class="quantity">1</td>
                  <td class="price">$1,000.00</td>
                  <td class="total">$1,000.00</td>
                </tr>
                <tr>
                  <td class="name"><a href="http://metagraphics.eu/cartmania1_5/index.php?route=product/product&amp;product_id=46">Sony VAIO</a></td>
                  <td class="model">Product 19</td>
                  <td class="quantity">1</td>
                  <td class="price">$1,000.00</td>
                  <td class="total">$1,000.00</td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td class="price" colspan="4"><b>Sub-Total:</b></td>
                  <td class="total">$2,000.00</td>
                </tr>
                <tr>
                  <td class="price" colspan="4"><b>Flat Rate:</b></td>
                  <td class="total">$5.00</td>
                </tr>
                <tr>
                  <td class="price" colspan="4"><b>VAT 17.5%:</b></td>
                  <td class="total">$350.88</td>
                </tr>
                <tr>
                  <td class="price" colspan="4"><b>Total:</b></td>
                  <td class="total">$2,355.88</td>
                </tr>
              </tfoot>
            </table>
            <div class="buttons">
              <div class="right"><a class="button" id="button-confirm"><span>Confirm Order</span></a></div>
            </div>
          </div>