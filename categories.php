<?php
require_once("header.php");

$query = "SELECT * from categories ";
$categoriess = db::getRecords($query);
?>

<div class="breadcrumb-section" style="background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(assets/img/innerpage/breadcrumb-bg2.jpg);">
  <svg class="vector" xmlns="http://www.w3.org/2000/svg" width="300" height="374" viewBox="0 0 300 374" fill="none">
    <path d="M49.999 359.57C49.999 530.694 188.228 669.14 358.399 669.14C528.57 669.14 666.799 530.694 666.799 359.57C666.799 188.445 528.57 50 358.399 50C188.228 50 49.999 188.445 49.999 359.57Z" stroke-width="100" />
  </svg>
  <div class="container">
    <div class="banner-wrapper">
      <div class="banner-content">
        <div class="row">
          <div class="col-lg-5">
            <div class="section-title white">
              <h1>Categories</h1>
            </div>
          </div>
        </div>
      </div>
      <ul class="breadcrumb-list">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>All collections</li>
      </ul>
    </div>
  </div>
</div>

<!-- Easiest To Sell -->
<div class="home2-portfolio-section mb-130">
  <div class="container-lg container-fluid">
    <div class="row mb-60">
      <div class="col-lg-12">
        <div class="section-title text-animation">
          <h2>All collections</h2>
        </div>
      </div>
    </div>
    <div class="row gy-lg-5 g-4 justify-content-between">
      <?php
      if ($categoriess) {
        foreach ($categoriess as $categories) {
      ?>
          <div class="col-lg-4 col-md-4">
            <div class="portfolio-card magnetic-item">
              <div class="image-and-tag">

                <div class="portfolio-img">
                  <img src="admin/uploads/<?php echo $categories['image']; ?>" style="width:400px" alt>
                  <a class="details-btn" href="product.php?id=<?php echo $categories['id']; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                      <path d="M10.0035 3.40804L1.41153 12L0 10.5885L8.59097 1.99651H1.01922V0H12V10.9808H10.0035V3.40804Z">
                      </path>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="portfolio-content">
                <h4>
                  <a href="product.php?id=<?php echo $categories['id']; ?>"><?php echo $categories['name']; ?></a>
                </h4>
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

<?php
require_once("footer.php")
?>