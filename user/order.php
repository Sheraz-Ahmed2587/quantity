<?php
session_start();
require_once("header.php");
require_once("sidebar.php");
require_once("database.php");
$db = db::open();
$datee = date("d-m-Y");

$query = "SELECT * FROM `order`";
$orders = db::getRecords($query);

// Ensure user_id is properly sanitized
// if (isset($_SESSION['uid'])) {
//   $uid = $_SESSION['uid']; // Get the user ID from the session
//   $query = "SELECT * FROM `order` WHERE user_id='$uid'";
//   $orders = db::getRecords($query);
// } else {
//   // Redirect to login page if user ID is not set in the session
//   header('Location: index.php');
//   exit();
// }
?>

<!-- HTML code for displaying orders -->
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Add your head content here -->
</head>

<body>
  <!-- main content start -->
  <div class="main-content">
    <div class="row mb-5">
      <!-- Add your content here -->
    </div>

    <div class="col-12">
      <div class="card" style="background: #fff;">
        <div class="card-body">
          <table class="table table-bordered table-dashed table-hover digi-dataTable dataTable-resize table-striped" id="componentDataTable3">
            <thead>
              <tr>
                <th><span class="resize-col">ID</span></th>
                <th><span class="resize-col">Unique Number</span></th>
                <th><span class="resize-col">Date</span></th>
                <th><span class="resize-col">Status</span></th>
                <th><span class="resize-col">Total Price</span></th>
                <th><span class="resize-col">View Order Sumary</span></th>
                <!-- <th><span class="resize-col">Action</span></th> -->
              </tr>
            </thead>
            <tbody>
              <?php
              if (!empty($orders)) {
                foreach ($orders as $order) {
              ?>
                  <tr>
                    <td><?php echo $order['id']; ?></td>
                    <td><?php echo $order['unique_num']; ?></td>
                    <td><?php echo $order['date']; ?></td>
                    <td><?php echo $order['status']; ?></td>
                    <td><?php echo $order['total_price']; ?></td>
                    <td>
                      <a href="order-list.php?id=<?php echo $order['id']; ?>" class="btn btn-primary text-light" style="text-decoration: none;">View</a>
                    </td>
                    <!-- <td>
                  <a href="action.php?del_order=<?php echo $order['id']; ?>" class="btn btn-danger text-light"
                    style="text-decoration: none;">Trash</a>
                </td> -->
                  </tr>
              <?php
                }
              } else {
                // No orders found for this user
                echo '<tr><td colspan="6">No orders found.</td></tr>';
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- main content end -->
  <?php
  require_once("footer.php")
  ?>