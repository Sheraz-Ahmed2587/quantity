<?php
require_once("header.php");
require_once("sidebar.php");

// $id = $_GET['id'];
// $query = "SELECT * from order where user_id='$id'";
// $orders = db::getRecords($query);

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM `order-sumary` WHERE order_id='$id'";
  $order_sumary = db::getRecords($query);
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
              <h4 class="mb-0 text-light">Order Sumary</h4>
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
              <th><span class="resize-col">Product</span></th>
              <th><span class="resize-col">Quantity</span></th>
              <th><span class="resize-col">Unique Number</span></th>
              <th><span class="resize-col">Price</span></th>


            </tr>
          </thead>
          <tbody>
            <?php
            if ($order_sumary) {
              foreach ($order_sumary as $sumary) {
                $query = "SELECT heading From product WHERE id=" . $sumary['product_id'];
                $heading = db::getCell($query);
            ?>
                <tr>
                  <td><span class="resize-col"><?php echo $sumary['id'] ?></span></td>
                  <!-- <td><span class="resize-col"><?php echo $sumary['product_id'] ?></span></td> -->
                  <td><span class="resize-col"><?php echo $heading ?></span></td>
                  <td><span class="resize-col"><?php echo $sumary['quantity'] ?></span></td>
                  <td><span class="resize-col"><?php echo $sumary['unique_num'] ?></span></td>
                  <td><span class="resize-col"><?php echo $sumary['price'] ?></span></td>

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