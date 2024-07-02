<?php
session_start();
require_once("header.php");



$id = $_GET['id'];
$data = "SELECT * FROM product WHERE id='$id'";
$product = db::getRecord($data);
?>
<div class="product-details-page pt-130 mb-130">
  <div class="container-lg container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title six mb-70">
          <h2>Product Details</h2>

        </div>
      </div>
    </div>
    <div class="row gy-5 mb-110">
      <div class="col-lg-6">
        <div class="product-details-img">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-img1" role="tabpanel">
              <div class="product-details-tab-img">
                <img src="admin/uploads/<?php echo $product['image']; ?>" alt>
              </div>
            </div>

          </div>
          <ul class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="v-pills-img1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img1" type="button" role="tab" aria-controls="v-pills-img1" aria-selected="true">
                <img src="admin/uploads/<?php echo $product['image']; ?>" alt>
              </button>
            </li>

          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="product-details-content">
          <h3><?php echo $product['heading']; ?></h3>
          <p><?php echo $product['dcp']; ?></p>
          <div class="price-tag">
            <h5><?php echo $product['price']; ?></h5>
          </div>
          <div class="product-quantity d-flex align-items-center justify-content-start">
            <form method="POST" action="admin/action.php">
              <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
              <input type="hidden" name="session_id" value="<?php echo session_id(); ?>">
              <button type="submit" name="add_cart" class="primary-btn5 black btn-hover">Add To Cart</button>
            </form>
            <!-- <a href="cart.php" class="primary-btn5 black btn-hover">Add To Cart</a> -->
          </div>
          <ul class="aditional-info">
            <li>
              <span>Category:</span>
              <a href="product.php">Back-to-School (1)</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="product-description-and-review-area">
      <div class="row">
        <div class="col-lg-12">
          <div class="nav nav2 nav-pills" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="description-tab" data-bs-toggle="pill" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">Product Details</button>
          </div>
          <div class="tab-content tab-content2" id="v-pills-tabContent2">
            <div class="tab-pane fade active show" id="description" role="tabpanel" aria-labelledby="description-tab">
              <div class="description">
                <p>Is it something to be regarded as a work of beauty or art? Is it clever slogans or amusing prose? Is
                  it workmanship to be judged for an award or recognition?</p>
                <p>
                  <strong>It’s none of the above.</strong>
                </p>
                <p>Advertising is salesmanship multiplied.</p>
                <p>Nothing more.</p>
                <p>And advertising copy, or copywriting, is salesmanship in print.</p>
                <p>The selling is accomplished by persuasion with the written word, much like a television commercial
                  sells (if done properly) by persuading with visuals and audio.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
require_once("footer.php")
?>