<?php
require_once("database.php");
$query = "SELECT * from logo ";
$logo = db::getRecord($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy Quality PLR</title>

  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="assets/vendor/css/all.min.css">
  <link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">
  <link rel="stylesheet" id="rtlStyle" href="#">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Diphylleia&family=Kalnia&family=Lora:wght@600&family=Montserrat:ital,wght@1,700&family=Open+Sans:wght@600&family=Poppins&family=Raleway:wght@500&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<style>
  body {
    font-family: 'Diphylleia', serif;
  }
</style>

<body class="light-theme">
  <!-- preloader start -->
  <div class="preloader d-none">
    <div class="loader">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!-- preloader end -->

  <!-- theme color hidden button -->
  <button class="header-btn theme-color-btn d-none"><i class="fa-light fa-sun-bright"></i></button>
  <!-- theme color hidden button -->

  <!-- main content start -->
  <div class="main-content login-panel">
    <div class="login-body">
      <div class="top d-flex justify-content-between align-items-center">
        <div class="logo">
          <img src="images/logo.png" style="width:100px">
        </div>
      </div>
      <div class="bottom">
        <h3 class="panel-title text-dark">Login</h3>
        <form action="action.php" method="post">
          <div class="input-group mb-25">
            <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
            <input type="text" name="email" class="form-control" placeholder="Username or email address">
          </div>
          <div class="input-group mb-20">
            <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
            <input type="password" name="password" class="form-control rounded-end" placeholder="Password">

            <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
          </div>
          <button type="submit" name="login" class="btn btn-primary w-100 login-btn text-dark">Sign
            in</button>
        </form>
      </div>
    </div>

    <!-- footer start -->
    <div class="footer" style="background:#000000 !important">
      <p>Copyright© <script>
          document.write(new Date().getFullYear())
        </script> All Rights Reserved By <span class="text-primary">Softrobo.Systems</span></p>
    </div>
    <!-- footer end -->
  </div>
  <!-- main content end -->

  <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
  <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
  <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- for demo purpose -->
  <script>
    var rtlReady = $('html').attr('dir', 'ltr');
    if (rtlReady !== undefined) {
      localStorage.setItem('layoutDirection', 'ltr');
    }
  </script>
  <!-- for demo purpose -->
</body>


</html>