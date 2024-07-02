<?php
session_start();
require_once("header.php");

$session_id = session_id();
// echo $session_id;
// exit();
$cart_data = "SELECT * FROM cart WHERE session_id='$session_id'";
$carts = db::getRecords($cart_data);


// print_r($carts);
// exit();

// Fetch product details for each cart item
$products = [];
foreach ($carts as $cart) {
  $product_id = $cart['product_id'];
  $product_query = "SELECT * FROM product WHERE id='$product_id'";
  $product = db::getRecord($product_query);
  if ($product) {
    $product['quantity'] = $cart['quantity'];
    $products[] = $product;
  }
}
?>




<!-- Rest HTML code -->

<div class="cart-page pt-130 mb-130">
  <div class="container-lg container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title six mb-70">
          <h2>Cart</h2>
        </div>
      </div>
    </div>
    <div class="row g-lg-4 gy-5">
      <div class="col-xl-8 col-lg-7">
        <div class="cart-shopping-wrapper">
          <div class="cart-widget-title">
            <h5>My Shopping</h5>
          </div>
          <table class="cart-table">
            <thead>
              <tr>
                <th>Product</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($products as $product) : ?>
                <tr>
                  <td data-label="Product Info">
                    <div class="product-info-wrapper">
                      <div class="product-info-img">
                        <img src="admin/uploads/<?php echo $product['image']; ?>" alt="">
                      </div>
                      <div class="product-info-content">
                        <h6><?php echo $product['heading']; ?></h6>
                        <p>
                          <span><?php echo $product['price']; ?></span>
                        </p>
                        <ul>
                          <li>remove</li>
                          <li>
                            <div class="qty-btn">quantity</div>

                            <!-- <div class="quantity-area">
                            <div class="quantity">
                              <a class="quantity__minus">
                                <span>
                                  <i class="bi bi-dash"></i>
                                </span>
                              </a>
                              <input class="quantityInput" name="quantity" type="text" class="quantity__input"
                                value="01" data-product-id="<?php echo $product['id']; ?>">
                              <a class="quantity__plus">
                                <span>
                                  <i class="bi bi-plus"></i>
                                </span>
                              </a>
                            </div>
                          </div> -->


                            <div class="quantity-area">
                              <div class="quantity">
                                <a class="quantity__minus">
                                  <span>
                                    <i class="bi bi-dash"></i>
                                  </span>
                                </a>
                                <input class="quantityInput" name="quantity" type="text" class="quantity__input" value="<?php echo $product['quantity']; ?>" data-product-id="<?php echo $product['id']; ?>">
                                <a class="quantity__plus">
                                  <span>
                                    <i class="bi bi-plus"></i>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <!-- Additional details or actions if needed -->
                      </div>
                    </div>
                  </td>
                  <td id="totalPrice" data-label="Total"><?php echo $product['price']; ?></td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <a href="product.php" class="details-button" style="color:white !important"> Continue Shopping <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.33624 2.84003L1.17627 10L0 8.82373L7.15914 1.66376H0.849347V0H10V9.15065H8.33624V2.84003Z" />
            </svg>
          </a>
        </div>
      </div>

      <div class="col-xl-4 col-lg-5 ">
        <div class="cart-order-sum-area">
          <div class="cart-widget-title">
            <h5>Order Summary</h5>
          </div>

          <!-- previous order sumary div -->
          <!-- <div class="order-summary-wrap">
            <ul class="order-summary-list">
              <li>
                <strong>Sub Total</strong>
                <strong>$2.99</strong>
              </li>

              <li>
                <strong>Total</strong>
                <strong>$2.99 USD</strong>
              </li>
            </ul>
            <a href="checkout.php" class="primary-btn3 btn-hover mt-40" name="processed_checkout"> Processed Checkout
              <span></span>
            </a>
          </div> -->

          <div class="order-summary-wrap">
            <ul class="order-summary-list">
              <li>
                <strong>Sub Total</strong>
                <strong id="subtotal">$0.00</strong> <!-- Placeholder for subtotal -->
              </li>
              <li>
                <strong>Total</strong>
                <strong id="total">$0.00 USD</strong> <!-- Placeholder for total -->
              </li>
            </ul>
            <a href="checkout.php" class="primary-btn3 btn-hover mt-40" name="processed_checkout">Processed Checkout
              <span></span></a>
          </div>



        </div>
      </div>
      <!-- Order summary area can be added here if needed -->
    </div>
  </div>
</div>

<?php
require_once("footer.php");
?>
<script>
  $(document).ready(function() {
    loadCartFromStorage();

    $('.quantity__plus, .quantity__minus').on('click', function() {
      let $input = $(this).parent().find('.quantityInput');
      // let $input = $(this);
      // console.log($input);
      let oldValue = parseInt($input.val());
      let newValue = oldValue; //

      // Check if the button clicked is for increasing or decreasing quantity
      if ($(this).hasClass('quantity__plus')) {
        newValue = oldValue + 1; // Increase quantity
      } else {
        if (oldValue > 1) {
          newValue = oldValue - 1; // Decrease quantity if greater than 1
        }
      }

      $input.val(newValue); // Update the input field with the new quantity
      // console.log($input.val());

      // Calculate total price
      let pricePerUnit = parseFloat($input.closest('tr').find('.product-info-content span').text().replace('$',
        '')); // Get the price per unit
      let totalPrice = newValue * pricePerUnit; // Calculate the total price

      // Update total price display
      $input.closest('tr').find('#totalPrice').text('$ ' + totalPrice.toFixed(
        2)); // Update the total price display

      // Store the new quantity in local storage
      let productID = $input.data('product-id'); // Get the product ID

      // localStorage.setItem('product_' + productID + '_quantity',
      //   newValue); // Store the new quantity in local storage

      // Send AJAX request to update quantity in the database
      updateQuantityInDatabase(productID, newValue);
    });

    // Function to load cart items from local storage
    function loadCartFromStorage() {
      $('.quantityInput').each(function() {
        let productID = $(this).data('product-id'); // Get the product ID
        let storedQuantity = $(this).val();
        // console.log($(this).val());
        if (storedQuantity !== null) {
          $(this).val(storedQuantity); // Set the input value to the stored quantity

          // Calculate total price and update display
          let pricePerUnit = parseFloat($(this).closest('tr').find('.product-info-content span').text().replace(
            '$', '')); // Get the price per unit
          let totalPrice = storedQuantity * pricePerUnit; // Calculate the total price
          $(this).closest('tr').find('#totalPrice').text('$ ' + totalPrice.toFixed(
            2)); // Update the total price display
        }
      });
    }

    // Function to send AJAX request and update quantity in the database
    function updateQuantityInDatabase(productID, newQuantity, ) {
      $.ajax({
        url: 'admin/action.php',
        method: 'POST',
        data: {
          product_id: productID,
          new_quantity: newQuantity,
          update_cart: 1
        },
      });
    }
  });

  // ............................

  // order summary

  $(document).ready(function() {
    // Function to update subtotal and total
    function updateOrderSummary() {
      let subtotal = 0;

      // Calculate subtotal based on each item in the cart
      $('.cart-table tbody tr').each(function() {
        let quantity = parseInt($(this).find('.quantityInput').val());
        let pricePerUnit = parseFloat($(this).find('.product-info-content span').text().replace('$', ''));
        subtotal += quantity * pricePerUnit;
      });

      // Update subtotal and total display
      $('#subtotal').text('$' + subtotal.toFixed(2));
      $('#total').text('$' + subtotal.toFixed(2) + ' USD');
    }

    // Event handler for adding to cart
    $('button[name="add_cart"]').on('click', function(e) {
      e.preventDefault();
      // Perform your add to cart logic here

      // After adding to cart, update order summary
      updateOrderSummary();
    });

    // Event handler for quantity change
    $('.quantity__plus, .quantity__minus').on('click', function() {
      // Perform quantity change logic here

      // After changing quantity, update order summary
      updateOrderSummary();
    });

    // Initial update of order summary on page load
    updateOrderSummary();
  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>