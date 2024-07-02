<?php
require_once("header.php");

$query = "SELECT * from blog ";
$blogs = db::getRecords($query);
?> 
<div class="breadcrumb-section" style="background-image:linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(assets/img/innerpage/breadcrumb-bg3.jpg);">
  <svg class="vector" xmlns="http://www.w3.org/2000/svg" width="300" height="374" viewBox="0 0 300 374" fill="none">
    <path d="M49.999 359.57C49.999 530.694 188.228 669.14 358.399 669.14C528.57 669.14 666.799 530.694 666.799 359.57C666.799 188.445 528.57 50 358.399 50C188.228 50 49.999 188.445 49.999 359.57Z" stroke-width="100" />
  </svg>
  <div class="container">
    <div class="banner-wrapper">
      <div class="banner-content">
        <div class="row">
          <div class="col-lg-5">
            <div class="section-title white">
              <h1>Our Latest <span>Blog Grid</span>
              </h1>
            </div>
          </div>
        </div>
      </div>
      <ul class="breadcrumb-list">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>Blog Grid</li>
      </ul>
    </div>
  </div>
</div>
<div class="blog-grid-section pt-130 mb-130">
  <div class="container-lg container-fluid">
    <div class="row gy-5 mb-70">
      <?php
                    if ($blogs) {
                        foreach ($blogs as $blog) {
                            ?>
      <div class="col-lg-4 col-md-6">
        <div class="blog-card1 magnetic-item">
          <a href="blog_detail.php?id=<?php echo $blog['id']; ?>" class="blog-img">
            <img src="admin/uploads/<?php echo $blog['image']; ?>" alt="blog-img-01">
          </a>
          <div class="blog-content">
            <ul class="mete">
              <li>
                <a href="blog_detail.php?id=<?php echo $blog['id']; ?>"><?php echo $blog['date']; ?></a>
              </li>
            </ul>
            <h4>
              <a href="blog_detail.php?id=<?php echo $blog['id']; ?>"><?php echo $blog['heading']; ?></a>
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