<?php
require_once("header.php");

$query = "SELECT * from banner";
$banner = db::getRecord($query);

$query = "SELECT * from about";
$about = db::getRecord($query);

$query = "SELECT * from categories WHERE id='1'";
$categories = db::getRecord($query);

$query = "SELECT * from categories WHERE id='2'";
$categories_two = db::getRecord($query);

$query = "SELECT * from categories WHERE id='3'";
$categories_three = db::getRecord($query);

$query = "SELECT * from testimonials ";
$testimonialss = db::getRecords($query);

$query = "SELECT * from easiest ";
$easiests = db::getRecords($query);
?>
<div class="home2-banner-area">
  <div class="container-xl container-fluid">
    <div class="row">
      <div class="col-xxl-8 col-xl-7 col-lg-7 d-flex align-items-center">
        <div class="banner-content-wrap">
          <h1 class="text-animation2"><?php echo $banner['heading']; ?> </h1>
          <div class="banner-content">
            <div class="content-and-btn text-animation">
              <p><?php echo $banner['dcp']; ?></p>
              <div class="banner-btn">
                <a href="#">
                  <span class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                      <path d="M10.0035 3.40804L1.41153 12L0 10.5885L8.59097 1.99651H1.01922V0H12V10.9808H10.0035V3.40804Z" />
                    </svg>
                  </span>
                  <span class="content">Start Now</span>
                  <span class="icon two">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                      <path d="M10.0035 3.40804L1.41153 12L0 10.5885L8.59097 1.99651H1.01922V0H12V10.9808H10.0035V3.40804Z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-5 col-lg-5 d-lg-flex d-none">
        <div class="banner-img magnetic-item">
          <img src="admin/uploads/<?php echo $banner['image']; ?>" alt>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Us -->
<div class="home2-about-section mb-130 mt-5 pt-5">
  <div class="container-lg container-fluid">
    <div class="row mb-60">
      <div class="col-lg-12">
        <div class="section-title three text-animation">
          <h2><?php echo $about['heading']; ?> <br></h2>
          <div class="dash-and-paragraph three">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 477 65">
              <path d="M0.333333 3C0.333333 4.47276 1.52724 5.66667 3 5.66667C4.47276 5.66667 5.66667 4.47276 5.66667 3C5.66667 1.52724 4.47276 0.333333 3 0.333333C1.52724 0.333333 0.333333 1.52724 0.333333 3ZM475 3L475.255 3.42984L476.82 2.5H475V3ZM438.668 65L441.872 60.197L436.111 59.8239L438.668 65ZM3 3.5H475V2.5H3V3.5ZM474.745 2.57016C459.928 11.3742 441.341 27.8789 438.461 60.47L439.457 60.5581C442.3 28.3895 460.613 12.1303 475.255 3.42984L474.745 2.57016Z" />
            </svg>
            <div class="btn-and-paragraph">
              <p><?php echo $about['dcp']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row g-lg-4 gy-5">
      <div class="col-lg-5">
        <div class="counter-and-btn">
          <ul class="counter-wrap">
            <li class="single-counter">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                  <path d="M58.3331 63C58.3331 50.1144 47.8856 39.6669 35 39.6669C22.1144 39.6669 11.6669 50.1144 11.6669 63H7C7 47.537 19.537 35 35 35C50.463 35 63 47.537 63 63H58.3331ZM39.6669 7C39.6669 19.8856 50.1144 30.3338 63 30.3338V35C47.537 35 35 22.463 35 7H39.6669Z" />
                  <path d="M56 21C59.866 21 63 17.866 63 14C63 10.134 59.866 7 56 7C52.134 7 49 10.134 49 14C49 17.866 52.134 21 56 21Z" />
                  <path d="M35.0001 63.0007C40.1546 63.0007 44.3332 58.8221 44.3332 53.6676C44.3332 48.513 40.1546 44.3345 35.0001 44.3345C29.8456 44.3345 25.667 48.513 25.667 53.6676C25.667 58.8221 29.8456 63.0007 35.0001 63.0007Z" fill="#F5BEBE" />
                  <path d="M18.6669 30.3338C25.1104 30.3338 30.3338 25.1104 30.3338 18.6669C30.3338 12.2234 25.1104 7 18.6669 7C12.2234 7 7 12.2234 7 18.6669C7 25.1104 12.2234 30.3338 18.6669 30.3338Z" fill="#F5BEBE" />
                </svg>
              </div>
              <div class="content">
                <div class="number">
                  <h3 class="counter">100</h3>
                  <span>%</span>
                </div>
                <p>Purchasing Once Gets You Unlimited Access</p>
              </div>
            </li>
            <li class="single-counter">
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                  <path d="M58.3331 63C58.3331 50.1144 47.8856 39.6669 35 39.6669C22.1144 39.6669 11.6669 50.1144 11.6669 63H7C7 47.537 19.537 35 35 35C50.463 35 63 47.537 63 63H58.3331ZM39.6669 7C39.6669 19.8856 50.1144 30.3338 63 30.3338V35C47.537 35 35 22.463 35 7H39.6669Z" />
                  <path d="M56 21C59.866 21 63 17.866 63 14C63 10.134 59.866 7 56 7C52.134 7 49 10.134 49 14C49 17.866 52.134 21 56 21Z" />
                  <path d="M35.0001 63.0007C40.1546 63.0007 44.3332 58.8221 44.3332 53.6676C44.3332 48.513 40.1546 44.3345 35.0001 44.3345C29.8456 44.3345 25.667 48.513 25.667 53.6676C25.667 58.8221 29.8456 63.0007 35.0001 63.0007Z" fill="#F5BEBE" />
                  <path d="M18.6669 30.3338C25.1104 30.3338 30.3338 25.1104 30.3338 18.6669C30.3338 12.2234 25.1104 7 18.6669 7C12.2234 7 7 12.2234 7 18.6669C7 25.1104 12.2234 30.3338 18.6669 30.3338Z" fill="#F5BEBE" />
                </svg>
              </div>
              <div class="content">
                <div class="number">
                  <h3 class="counter">100</h3>
                  <span>% Yours</span>
                </div>
                <p>Claim PLR As Your Own</p>
              </div>
            </li>
          </ul>
          <a href="#">
            <span class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                <path d="M10.0035 3.40804L1.41153 12L0 10.5885L8.59097 1.99651H1.01922V0H12V10.9808H10.0035V3.40804Z">
                </path>
              </svg>
            </span>
            <span class="content">Start Your Journey</span>
            <span class="icon two">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                <path d="M10.0035 3.40804L1.41153 12L0 10.5885L8.59097 1.99651H1.01922V0H12V10.9808H10.0035V3.40804Z">
                </path>
              </svg>
            </span>
          </a>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="row g-4">
          <div class="col-sm-5">
            <div class="about-left">
              <div class="about-img magnetic-item">
                <img src="assets/img/home2/about-02.jpg" alt>
              </div>
              <p class="text-animation2"><?php echo $about['dcp']; ?></p>
            </div>
          </div>
          <div class="col-sm-7 d-sm-flex  d-none">
            <div class="about-right-img animet-images magnetic-item">
              <img src="admin/uploads/<?php echo $about['image']; ?>" alt>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fresh For 2024 -->
<div class="shop-page pt-130 mb-130">
  <div class="container-lg container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title six mb-70">
          <h2>Fresh for 2024</h2>
          <p>New Feature: Direct Import to Canva!</p>
        </div>
      </div>
    </div>
    <div class="row g-xl-4 gy-5">
      <div class="col-xl-12 order-xl-2 order-1">
        <div class="row gy-5 mb-70">
          <?php


          $query = "SELECT * from product WHERE cat_id='1'";
          $sections = db::getRecords($query);


          if ($sections) {
            foreach ($sections as $section) {
          ?>
              <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                  <div class="product-card-img">
                    <a href="product_detail.php?id=<?php echo $section['id']; ?>">
                      <img src="admin/uploads/<?php echo $section['image']; ?>" alt>
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
                      <a href="product_detail.php?id=<?php echo $section['id']; ?>"><?php echo $section['heading']; ?></a>
                    </h6>
                    <span><?php echo $section['price']; ?> </span>
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
<!-- Etsy & Resell Ready -->
<div class="shop-page pt-130 mb-130">
  <div class="container-lg container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title six mb-70">
          <h2>Etsy & Resell Ready</h2>
          <p>Freshly created and found nowhere else. Ready to use with no editing necessary.</p>
        </div>
      </div>
    </div>
    <div class="row g-xl-4 gy-5">
      <div class="col-xl-12 order-xl-2 order-1">
        <div class="row gy-5 mb-70">
          <?php


          $query = "SELECT * from product WHERE cat_id='2'";
          $two_sections = db::getRecords($query);


          if ($two_sections) {
            foreach ($two_sections as $two_section) {
          ?>
              <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                  <div class="product-card-img">
                    <a href="product_detail.php?id=<?php echo $two_section['id']; ?>">
                      <img src="admin/uploads/<?php echo $two_section['image']; ?>" style="height: 390px;width: 100%;" alt>
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
                      <a href="product_detail.php?id=<?php echo $two_section['id']; ?>"><?php echo $two_section['heading']; ?></a>
                    </h6>
                    <span><?php echo $two_section['price']; ?></span>
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

<!-- LIMITED TIME OFFER -->
<div class="home2-inner-banner" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.00) 100%), url(assets/img/home2/inner-baner-bg.jpg);">

  <div class="container-lg container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="banner-content text-animation">
          <h6>
            <span></span>LIMITED TIME OFFER
          </h6>
          <h2>“ This bundle is one of the biggest you can find online, the possibilites are endless!”</h2>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Easiest To Sell -->
<div class="home2-portfolio-section mb-130">
  <div class="container-lg container-fluid">
    <div class="row mb-60">
      <div class="col-lg-12">
        <div class="section-title text-animation">
          <h2>Easiest To Sell</h2>
        </div>
      </div>
    </div>
    <div class="row gy-lg-5 g-4 justify-content-between">
      <?php
      if ($easiests) {
        foreach ($easiests as $easiest) {
      ?>
          <div class="col-lg-6 col-md-6">
            <div class="portfolio-card magnetic-item">
              <div class="image-and-tag">

                <div class="portfolio-img">
                  <img src="admin/uploads/<?php echo $easiest['image']; ?>" alt>
                  <a class="details-btn" href="product_detail.php?id=<?php echo $easiest['id']; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                      <path d="M10.0035 3.40804L1.41153 12L0 10.5885L8.59097 1.99651H1.01922V0H12V10.9808H10.0035V3.40804Z">
                      </path>
                    </svg>
                  </a>
                </div>
              </div>
              <div class="portfolio-content">
                <h4>
                  <a href="product_detail.php?id=<?php echo $easiest['id']; ?>"><?php echo $easiest['heading']; ?></a>
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

<!-- Highest In Demand PLR -->
<div class="shop-page pt-130 mb-130">
  <div class="container-lg container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title six mb-70">
          <h2>Highest In Demand PLR</h2>
          <p>After months of research, these are the PLR Products you have a higher chance of reselling</p>
        </div>
      </div>
    </div>
    <div class="row g-xl-4 gy-5">
      <div class="col-xl-12 order-xl-2 order-1">
        <div class="row gy-5 mb-70">
          <?php


          $query = "SELECT * from product WHERE cat_id='3'";
          $three_sections = db::getRecords($query);


          if ($three_sections) {
            foreach ($three_sections as $three_section) {
          ?>
              <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                  <div class="product-card-img">
                    <a href="product_detail.php?id=<?php echo $three_section['id']; ?>">
                      <img src="admin/uploads/<?php echo $three_section['image']; ?>" style="height: 390px;width: 100%;" alt>
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
                      <a href="product_detail.php?id=<?php echo $three_section['id']; ?>"><?php echo $three_section['heading']; ?></a>
                    </h6>
                    <span><?php echo $three_section['price']; ?> </span>
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

<!-- Start Your Journey With Us -->
<div class="home2-inner-banner" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0.00) 100%), url(assets/img/home2/inner-baner-bg.jpg);">

  <div class="container-lg container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="banner-content text-animation">
          <h6>
            <span></span>PLR Could Be The Key To Your Dreams
          </h6>
          <h2>“ Start Your Journey With Us”</h2>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Company Showcase -->
<div class="home2-testimonial-section mb-130 mt-5 pt-5">
  <div class="container-lg container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title six mb-70">
          <h2>Company Showcase</h2>

        </div>
      </div>
    </div>
    <div class="row mb-40">
      <div class="col-lg-12">
        <div class="swiper home2-testimonial-slider">
          <div class="swiper-wrapper">
            <?php
            if ($testimonialss) {
              foreach ($testimonialss as $testimonials) {
            ?>
                <div class="swiper-slide">
                  <div class="row g-md-4 gy-5">
                    <div class="col-md-5 d-flex justify-content-md-center">
                      <div class="author-img magnetic-item">
                        <img src="admin/uploads/<?php echo $testimonials['image']; ?>" alt>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="testimonal-content">
                        <p><?php echo $testimonials['dcp']; ?></p>
                        <div class="author-area">
                          <div class="content">
                            <h6><?php echo $testimonials['name']; ?></h6>
                            <span><?php echo $testimonials['designation']; ?></span>
                          </div>
                        </div>
                      </div>
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
    <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-7">
        <div class="slider-btn-area">
          <div class="slider-btn-group w-100">
            <div class="slider-btn prev-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.416666 5.9668H15V4.7168H0.416666V5.9668Z" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.04115 4.7168C3.98115 4.7168 6.38281 7.3018 6.38281 10.0585V10.6835H5.13281V10.0585C5.13281 7.96596 3.26448 5.9668 1.04115 5.9668H0.416979V4.7168H1.04115Z" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.04115 5.96667C3.98115 5.96667 6.38281 3.38167 6.38281 0.625V0H5.13281V0.625C5.13281 2.71833 3.26448 4.71667 1.04115 4.71667H0.416979V5.96667H1.04115Z" />
              </svg>
            </div>
            <div class="slider-btn next-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5833 5.9668H0V4.7168H14.5833V5.9668Z" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9589 4.7168C11.0189 4.7168 8.61719 7.3018 8.61719 10.0585V10.6835H9.86719V10.0585C9.86719 7.96596 11.7355 5.9668 13.9589 5.9668H14.583V4.7168H13.9589Z" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9589 5.96667C11.0189 5.96667 8.61719 3.38167 8.61719 0.625V0H9.86719V0.625C9.86719 2.71833 11.7355 4.71667 13.9589 4.71667H14.583V5.96667H13.9589Z" />
              </svg>
            </div>
          </div>
          <span class="dash"></span>
          <div class="franctional-pagi2"></div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
require_once("footer.php")
?>