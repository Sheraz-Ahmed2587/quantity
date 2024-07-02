<?php
session_start();
require_once("header.php");
require_once("sidebar.php");
require_once("database.php");

if (isset($_SESSION['uid'])) {
  $uid = $_SESSION['uid'];

  $query = "SELECT * FROM user WHERE id = $uid";
  $user = db::getRecord($query);
}

?>

<!-- main content start -->

<div class="main-content">
  <div class="dashboard-breadcrumb mb-25">
    <h2>Profile Fields</h2>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel mb-25">
        <div class="panel-body">
          <div class="row g-3">
            <form method="POST" action="action.php" enctype="multipart/form-data">
              <div class="col-sm-12">
                <label for="basicInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="basicInput" name="firstname" value="<?php echo $user['firstname']; ?>">
              </div>
              <div class="col-sm-12 mt-2">
                <label for="basicInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="basicInput" name="email" value="<?php echo $user['email']; ?>">
              </div>
              <div class="col-sm-12 mt-2">
                <label for="basicInput" class="form-label">Password</label>
                <input type="password" class="form-control" id="basicInput" name="password" value="<?php echo $user['password']; ?>">
              </div>

              <div class="col-sm-12 mt-2">
                <label for="basicInput" class="form-label">Referal</label>
                <input type="text" class="form-control" id="basicInput" readonly value="https://localhost/quantity/index.php?ref=<?php echo $user['referal']; ?>">
              </div>

              <input type="hidden" name="uid" value="<?php echo $uid; ?>">
              <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

              <div class="row mt-4">
                <div class="col-md-4 mx-auto">
                  <button class="btn btn-success w-100" name="update_profile" type="submit">Update</button>
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
require_once('footer.php');
?>