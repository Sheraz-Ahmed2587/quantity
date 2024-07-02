<?php
require_once("header.php");

$query = "SELECT * from categories ";
$categoriess = db::getRecords($query);

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM product WHERE cat_id='$id'";
  $products = db::getRecords($query);
} else {
  //when 'id' parameter is not provided (show all products)
  $query = "SELECT * FROM product";
  $products = db::getRecords($query);
}

// $id = $_GET['id'];
// $query = "SELECT * from product where cat_id='$id'";
// $products = db::getRecords($query);


?>

<div class="shop-page pt-130 mb-130">
  <div class="container-lg container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title six mb-70">
          <h2>Products</h2>

        </div>
      </div>
    </div>
    <div class="row mb-50">
      <div class="col-lg-12">
        <div class="show-item-and-filter">
          <p>Showing <strong>09</strong> results of <strong>20</strong> products </p>
          <div class="filter-area">
            <h6>Sort By:</h6>
            <form>
              <div class="form-inner">
                <select>
                  <option value="1">Featured</option>
                  <option value="1">Best selling</option>
                  <option value="2">Alphabetically, A-Z</option>
                  <option value="2">Alphabetically, Z-A</option>
                  <option value="2">Price, low to high</option>
                  <option value="2">Price, high to low</option>
                  <option value="2">Date, old to new</option>
                  <option value="2">Date, new to old</option>
                </select>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-xl-4 gy-5">
      <div class="col-xl-3 order-xl-1 order-2">
        <div class="shop-sidebar">

          <div class="single-widgets widget_search mb-25">
            <form>
              <div class="wp-block-search__inside-wrapper ">
                <input type="search" id="wp-block-search__input-1" class="wp-block-search__input" name="s" value placeholder="Search Product" required>
                <button type="submit" class="wp-block-search__button">
                  <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.7425 10.3418C12.7107 9.0205 13.1444 7.38236 12.9567 5.75508C12.769 4.1278 11.9739 2.63139 10.7303 1.56522C9.48666 0.49905 7.88635 -0.0582469 6.2495 0.0048239C4.61265 0.0678947 3.05997 0.746681 1.90209 1.90538C0.744221 3.06409 0.0665459 4.61725 0.00464636 6.25415C-0.0572531 7.89104 0.501188 9.49095 1.56825 10.7338C2.63531 11.9766 4.13229 12.7707 5.7597 12.9572C7.38711 13.1438 9.02494 12.7089 10.3455 11.7397H10.3445C10.3745 11.7797 10.4065 11.8177 10.4425 11.8547L14.2924 15.7046C14.4799 15.8922 14.7342 15.9977 14.9995 15.9977C15.2647 15.9978 15.5192 15.8926 15.7068 15.7051C15.8944 15.5176 15.9999 15.2632 16 14.9979C16.0001 14.7327 15.8948 14.4782 15.7073 14.2906L11.8575 10.4408C11.8217 10.4046 11.7833 10.3711 11.7425 10.3408V10.3418ZM12.0004 6.4979C12.0004 7.22015 11.8582 7.93532 11.5818 8.60258C11.3054 9.26985 10.9003 9.87614 10.3896 10.3868C9.87889 10.8975 9.2726 11.3027 8.60533 11.5791C7.93807 11.8554 7.2229 11.9977 6.50065 11.9977C5.77841 11.9977 5.06324 11.8554 4.39597 11.5791C3.72871 11.3027 3.12242 10.8975 2.61171 10.3868C2.10101 9.87614 1.6959 9.26985 1.41951 8.60258C1.14312 7.93532 1.00086 7.22015 1.00086 6.4979C1.00086 5.03927 1.5803 3.64037 2.61171 2.60896C3.64312 1.57755 5.04202 0.99811 6.50065 0.99811C7.95929 0.99811 9.35818 1.57755 10.3896 2.60896C11.421 3.64037 12.0004 5.03927 12.0004 6.4979Z" />
                  </svg>
                </button>
              </div>
            </form>
          </div>
          <div class="single-widgets mb-25">
            <div class="widget-title">
              <h5>Category</h5>
            </div>
            <div class="checkbox-container">
              <ul>
                <?php
                if ($categoriess) {
                  foreach ($categoriess as $categories) {
                ?>
                    <li>
                      <label class="containerss">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        <span><?php echo $categories['name']; ?></span>
                      </label>
                    </li>
                <?php
                  }
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-9 order-xl-2 order-1">
        <div class="row gy-5 mb-70">
          <?php
          if ($products) {
            foreach ($products as $product) {
          ?>
              <div class="col-lg-4 col-sm-6">
                <div class="product-card">
                  <div class="product-card-img">
                    <a href="product_detail.php?id=<?php echo $product['id']; ?>">
                      <img src="admin/uploads/<?php echo $product['image']; ?>" alt>
                    </a>
                    <div class="cart-and-favorite-area">
                      <ul>
                        <li>
                          <a href="cart.php">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M11.9016 15H4.10156C2.45156 15 1.10156 13.65 1.10156 12V11.9L1.40156 3.9C1.45156 2.25 2.80156 1 4.40156 1H11.6016C13.2016 1 14.5516 2.25 14.6016 3.9L14.9016 11.9C14.9516 12.7 14.6516 13.45 14.1016 14.05C13.5516 14.65 12.8016 15 12.0016 15H11.9016ZM4.40156 2C3.30156 2 2.45156 2.85 2.40156 3.9L2.10156 12C2.10156 13.1 3.00156 14 4.10156 14H12.0016C12.5516 14 13.0516 13.75 13.4016 13.35C13.7516 12.95 13.9516 12.45 13.9516 11.9L13.6516 3.9C13.6016 2.8 12.7516 2 11.6516 2H4.40156Z" />
                              <path d="M8 7C6.05 7 4.5 5.45 4.5 3.5C4.5 3.2 4.7 3 5 3C5.3 3 5.5 3.2 5.5 3.5C5.5 4.9 6.6 6 8 6C9.4 6 10.5 4.9 10.5 3.5C10.5 3.2 10.7 3 11 3C11.3 3 11.5 3.2 11.5 3.5C11.5 5.45 9.95 7 8 7Z" />
                            </svg>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="product-card-content">
                    <h6>
                      <a href="product_detail.php?id=<?php echo $product['id']; ?>"><?php echo $product['heading']; ?></a>
                    </h6>
                    <span><?php echo $product['price']; ?> </span>
                  </div>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
require_once("footer.php")
?>