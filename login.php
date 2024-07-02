<?php
session_start();
require_once("header.php")
?>
<div class="contact-page pt-130 mb-130">
  <div class="container-lg container-fluid">
    <div class="section-title six mb-70">
      <h2 class="text-center">Sign In</h2>
    </div>
    <div class="contact-info-wrap">
      <div class="row gy-5 justify-content-between">
        <div class="col-xl-8 mx-auto">
          <div class="contact-form-wrap">
            <form method="post" action="action.php">
              <div class=" row">
                <div class="col-md-12">
                  <div class="form-inner mb-30">
                    <label>Email</label>
                    <input type="email" placeholder="example@gamil.com" name="email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-inner mb-30">
                    <label>Password</label>
                    <input type="password" placeholder="*****" name="password">
                  </div>
                </div>
                <!-- <div class="col-md-12 mb-50">
                  <label class="form-check-label text-light" for="contactCheck"> <a href="forget.php" class="text-light">Forgot your password?</a> </label>
                </div> -->
              </div>
              <div class="row">
                <div class="col-md-4 mx-auto text-center">
                  <div class="form-inner mb-3">
                    <button id="log_in" class="primary-btn3 btn-hover" type="submit" name="signin"> Login <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.0035 3.40804L1.41153 12L0 10.5885L8.59097 1.99651H1.01922V0H12V10.9808H10.0035V3.40804Z">
                        </path>
                      </svg>
                      <span></span>
                    </button>
                  </div>
                  <a href="register.php" class="text-light mt-3">Sign up</a>
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