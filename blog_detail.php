<?php
require_once("header.php");

$id=$_GET['id'];
$data="SELECT * FROM blog WHERE id='$id'";
$blog=db::getRecord($data);
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
              <h1>Blog Details </h1>
            </div>
          </div>
        </div>
      </div>
      <ul class="breadcrumb-list">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>Blog Detail</li>
      </ul>
    </div>
  </div>
</div>
<div class="details-page-wrapper pt-130 pb-130">
  <div class="container-lg container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="post-tag-and-title">
          <h1 class="post-title"><?php echo $blog['heading']; ?></h1>
        </div>
        <span class="line-break"></span>
        <span class="line-break"></span>
        <span class="line-break"></span>
        <div class="post-author-meta">
          <div class="author-and-date">
            <div class="date">
              <span>Date</span>
              <h6><?php echo $blog['date']; ?></h6>
            </div>
          </div>
        </div>
        <span class="line-break"></span>
        <span class="line-break"></span>
        <span class="line-break"></span>
        <div class="post-thumb">
          <img src="admin/uploads/<?php echo $blog['image']; ?>" class="w-100" alt>
        </div>
        <span class="line-break"></span>
        <span class="line-break"></span>
        <span class="line-break"></span>
        <div class="details-page-content mb-130">
          <div class="row g-lg-4 gy-3">
            <div class="col-lg-12">
              <p class="first-para"><?php echo $blog['dcp']; ?></p>
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