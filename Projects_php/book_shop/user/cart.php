  <?php include_once('header.php'); ?>

  <section id="latest-cart" class=" my-5">
    <div class="container d-flex flex-wrap gap-4 justify-content-between cart-container">

      <!-- Cart Items -->
      <div class="cart-items container d-flex flex-wrap gap-4 justify-content-between cart-container">
        <h2>Cart</h2>

        <!-- Header Row -->
        <div class="cart-row header">
          <div>Product</div>
          <div>Price</div>
          <div>Quantity</div>
          <div>Subtotal</div>
        </div>

        <!-- Items -->
        <div class="cart-row">
          <div class="product-detail">
            <img src="./assets/images/tab-item5.jpg" alt="item">
            <span>Office Plant</span>
          </div>
          <div>$29.00</div>
          <div><input type="number" value="1" min="1"></div>
          <div>$29.00</div>
        </div>

        <div class="cart-row">
          <div class="product-detail">
            <img src="./assets/images/tab-item5.jpg" alt="item">
            <span>Lamp</span>
          </div>
          <div>$59.00</div>
          <div><input type="number" value="1" min="1"></div>
          <div>$59.00</div>
        </div>

        <div class="cart-row">
          <div class="product-detail">
            <img src="./assets/images/tab-item5.jpg" alt="item">
            <span>Office Set-Up</span>
          </div>
          <div>$599.00</div>
          <div><input type="number" value="1" min="1"></div>
          <div>$599.00</div>
        </div>

        <!-- Cart Update Button Only -->
        <div class="cart-actions single-button">
          <button class="btn gray">Update Cart</button>
        </div>
      </div>

      <!-- Cart Totals -->
      <div class="cart-summary">
        <h3>Cart Totals</h3>
        <div class="summary-row">
          <span>Subtotal</span>
          <span>$687.00</span>
        </div>
        <div class="summary-row total">
          <span>Total</span>
          <span>$687.00</span>
        </div>
        <button class="btn checkout">Proceed to Checkout</button>
      </div>

    </div>
  </section>
              <?php include_once('footer.php') ?>