<?php
require_once("header.php");
require_once("sidebar.php");
require_once("database.php");


if (isset($_GET['id'])) {
  $id = $_GET['id'];
  echo  $query = "SELECT * FROM `order-sumary` WHERE order_id='$id'";
  $orders = db::getRecords($query);
}

?>

<!-- main content start -->
<div class="main-content">
  <div class="row mb-5">
    <div class="col-md-12">
      <div class="card" style="background:#000000;">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h4 class="mb-0 text-light">Order Summary</h4>
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
              <!-- <th><span class="resize-col">Order id</span></th> -->
              <th><span class="resize-col">Product</span></th>
              <th><span class="resize-col">Quantity</span></th>
              <th><span class="resize-col">Price</span></th>
              <th><span class="resize-col">Unique Num</span></th>
              <!-- <th><span class="resize-col">Action</span></th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            if (!empty($orders)) {
              foreach ($orders as $order) {
                $query = "SELECT heading from product where id=" . $order['product_id'];
                $heading = db::getCell($query);
            ?>
                <tr>
                  <td><?php echo $order['id']; ?></td>
                  <!-- <td><?php echo $order['order_id']; ?></td> -->
                  <td><?php echo $heading ?></td>
                  <td><?php echo $order['quantity']; ?></td>

                  <td><?php echo $order['price']; ?></td>
                  <td><?php echo $order['unique_num']; ?></td>
                  <!-- <td>
                                        <a href="action.php?del_order=<?php echo $order['id']; ?>" class="btn btn-danger text-light" style="text-decoration: none;">Trash</a>
                                    </td> -->
                </tr>
            <?php
              }
            } else {
              // No orders found for this ID
              echo '<tr><td colspan="3">No orders found.</td></tr>';
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