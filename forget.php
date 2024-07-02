<?php
require_once("header.php")
?>
<div class="contact-page pt-130 mb-130">
  <div class="container-lg container-fluid">
    <div class="section-title six mb-70">
      <h2 class="text-center">Recover password</h2>
    </div>
    <div class="contact-info-wrap">
      <div class="row gy-5 justify-content-between">
        <div class="col-xl-8 mx-auto">
          <div class="contact-form-wrap">
            <form>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-inner mb-30">
                    <label>Email</label>
                    <input type="email" placeholder="example@gamil.com">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 mx-auto text-center">
                  <div class="form-inner mb-3">
                    <button class="primary-btn3 btn-hover" type="submit"> Recover <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.0035 3.40804L1.41153 12L0 10.5885L8.59097 1.99651H1.01922V0H12V10.9808H10.0035V3.40804Z"></path>
                      </svg>
                      <span></span>
                    </button>
                  </div>
                  <a href="login.php" class="text-light mt-3">Back to login</a>
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