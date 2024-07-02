<?php
require_once("header.php");
require_once("sidebar.php");

$query = "SELECT * from user";
$users = db::getRecords($query);

?>

<!-- main content start -->
<div class="main-content">
  <div class="row mb-5">
    <div class="col-md-12">
      <div class="card" style="background:#000000;">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h4 class="mb-0 text-light">Contact Us</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12">
    <div class="card" style="background: #fff;">
      <div class="card-body">
        <table class="table table-bordered table-dashed table-hover digi-dataTable dataTable-resize table-striped" id="componentDataTable3">
          <thead>
            <tr>
              <th><span class="resize-col">ID</span></th>
              <th><span class="resize-col">First Name</span></th>
              <th><span class="resize-col">Last Name</span></th>

              <th><span class="resize-col">Email</span></th>
              <th><span class="resize-col">Password</span></th>
              <th><span class="resize-col">Action</span></th>
            </tr>
          </thead>
          <tbody>

            <?php
            if ($users) {
              foreach ($users as $user) {
            ?>
                <tr>
                  <td><span class="resize-col"><?php echo $user['id'] ?></span></td>
                  <td><span class="resize-col"><?php echo $user['firstname'] ?></span></td>
                  <td><span class="resize-col"><?php echo $user['lastname'] ?></span></td>

                  <td><span class="resize-col"><?php echo $user['email'] ?></span></td>
                  <td><span class="resize-col"><?php echo $user['password'] ?></span></td>
                  <td>
                    <span class="resize-col">
                      <a href="order.php?id=<?php echo $user['id']; ?>" class="btn btn-primary text-light" style="text-decoration: none;">View Order</a>
                    </span>
                  </td>
                </tr>
            <?php
              }
            }
            ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <?php
  require_once("footer.php")
  ?>