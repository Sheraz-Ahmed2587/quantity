<?php
session_start();
require_once("header.php");


$session_id = session_id();
$cart_data = "SELECT * FROM cart WHERE session_id='$session_id'";
$carts = db::getRecords($cart_data);

// Fetch product details for each cart item
$products = [];
$sub_total = 0;
$total = 0;
foreach ($carts as $cart) {
  $product_id = $cart['product_id'];
  $product_query = "SELECT * FROM product WHERE id='$product_id'";
  $product = db::getRecord($product_query);
  if ($product) {
    $sub_total += $cart['quantity'] * $product['price'];
    $product['quantity'] = $cart['quantity'];
    $products[] = $product;
  }
}
// echo $sub_total;
// exit();



$total = $sub_total + 10;

$discount = 0;
if (isset($_SESSION['reference']) === true) {
  // $referal = $_SESSION['reference'];
  $query = "SELECT discount from ref_discount where id = 1";
  $discount = db::getCell($query);
  $discount = ($total * (100 - $discount)) / 100;
}

?>

<div class="checkout-page pt-130 mb-130">
  <div class="container-lg container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title six mb-70">
          <h2>Checkout</h2>
        </div>
      </div>
    </div>
    <div class="row g-lg-4 gy-5">
      <div class="col-lg-7">
        <div class="checkout-form-wrapper">
          <div class="checkout-form-title">
            <h5>Billing Information</h5>
          </div>
          <div class="checkout-form">
            <form method="post" action="action.php">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-inner mb-25">
                    <label>Full Name*</label>
                    <input type="text" placeholder="Daniel Scoot" name="firstname">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-inner mb-25">
                    <label>Phone Number*</label>
                    <input type="text" placeholder="(212)+ 455 645 678" name="phone">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-inner mb-25">
                    <label>Email Address <span>(Optional)</span>
                    </label>
                    <input type="email" placeholder="info@gmail.com" name="email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-inner mb-25">
                    <label>Your Location</label>
                    <input type="text" placeholder="Type Location" name="location">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-inner mb-25">
                    <label>Street Address*</label>
                    <input type="text" placeholder="Street address" name="address">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-inner mb-25">
                    <label>Postal Code*</label>
                    <input type="text" placeholder="Postal code" name="code">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-inner mb-25">
                    <label>Short Notes*</label>
                    <textarea placeholder="checkout-page"></textarea>
                  </div>
                </div>
                <input type="hidden" name="total_amount" value="<?php echo $total ?>">
                <button type="submit" class="primary-btn3 btn-hover" name="proceed"> Place Your Order <span></span>
                </button>
              </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="checkout-form-wrapper">
          <div class="checkout-form-title">
            <h5>Order Summary</h5>
          </div>
          <div class="order-sum-area">

            <div class="cart-menu">

              <div class="cart-footer">
                <div class="pricing-area mb-40">
                  <ul>
                    <li>
                      <strong>Sub Total</strong>
                      <strong id="subtotal">$<?php echo $sub_total ?></strong>
                    </li>
                    <li> Shipping <div class="order-info">
                        <p>Shipping Free*</p>
                        <span> Pickup fee $10.00</span>
                      </div>
                    </li>



                    <li>
                      <strong>Total</strong>
                      <strong id="total">$<?php echo $total ?></strong>
                    </li>

                    <li>
                      <strong>Discounted Price</strong>
                      <strong><?php echo $discount ?></strong>
                    </li>


                  </ul>
                </div>
                <div class="choose-payment-method">
                  <h6>Select Payment Method</h6>
                  <div class="payment-option">
                    <ul>
                      <li class="paypal active">
                        <img src="assets/img/innerpage/vector/payPal.svg" alt>
                        <div class="checked">
                          <input type="radio" class="hidden" name="payment" value="0" />
                          <i class="bi bi-check"></i>
                        </div>
                      </li>
                      <li class="stripe">
                        <img src="assets/img/innerpage/vector/stripe.svg" alt>
                        <div class="checked">
                          <input type="radio" class="hidden" name="payment" value="1" />
                          <i class="bi bi-check"></i>
                        </div>
                      </li>
                      <li class="offline">
                        <img src="assets/img/innerpage/vector/offline.svg" alt>
                        <div class="checked">
                          <input type="radio" class="hidden" name="payment" value="2" />
                          <i class="bi bi-check"></i>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- <div class="pt-25" id="StripePayment" style="display: none;">
                      <div class="row g-4">
                        <div class="col-md-12">
                          <div class="form-inner">
                            <label>Card Number</label>
                            <input type="text" placeholder="1234 1234 1234 1234">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-inner">
                            <label>Expiry</label>
                            <input type="text" placeholder="MM/YY">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-inner">
                            <label>CVC</label>
                            <input type="text" placeholder="CVC">
                          </div>
                        </div>
                      </div>
                    </div> -->
                </div>

              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
require_once("footer.php")
?>