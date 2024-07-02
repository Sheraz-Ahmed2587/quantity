<?php
require_once("header.php");
require_once("sidebar.php");

// $id = $_GET['id'];
// $query = "SELECT * from order where user_id='$id'";
// $orders = db::getRecords($query);


$query = "SELECT * FROM `order`";
$orders = db::getRecords($query);

?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change order status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="action.php">
          <select class="form-control" id="statusSelect" name="status">
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
          </select>
          <input type="hidden" id="order_id" name="order_id">

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="saveChangesButton" name="save_changes">Save
              changes</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- main content start -->
<div class="main-content">
  <div class="row mb-5">
    <div class="col-md-12">
      <div class="card" style="background:#000000;">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h4 class="mb-0 text-light">Orders</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-12">
    <div class="card" style="background: #fff;">
      <div class="card-body">
        <table class="table table-bordered table-dashed table-hover digi-dataTable dataTable-resize table-striped"
          id="componentDataTable3">
          <thead>
            <tr>
              <th><span class="resize-col">ID</span></th>
              <!-- <th><span class="resize-col">User ID</span></th> -->
              <th><span class="resize-col">Unique Number</span></th>
              <th><span class="resize-col">Date</span></th>

              <th><span class="resize-col">Status</span></th>
              <th><span class="resize-col">Total Price</span></th>

              <th><span class="resize-col">Action</span></th>
            </tr>
          </thead>
          <tbody>
            <?php
            if ($orders) {
              foreach ($orders as $order) {
            ?>
            <tr>
              <td><span class="resize-col" id="status"><?php echo $order['id'] ?></span></td>
              <td><span class="resize-col"><?php echo $order['unique_num'] ?></span></td>
              <td><span class="resize-col"><?php echo $order['date'] ?></span></td>

              <td>
                <span class="resize-col">
                  <?php
                      if ($order['status'] == 'completed') { ?>
                  <button type="button" class="btn btn-primary  text-light"
                    onclick="checkId('<?php echo $order['id']; ?>')">
                    completed
                  </button>
                  <?php } else { ?>
                  <button type="button" class="btn btn-primary  text-light"
                    onclick="checkId('<?php echo $order['id']; ?>')">
                    pending
                  </button>
                  <?php } ?>

                </span>
              </td>
              <!-- <td>
                    <span class="resize-col">
                      <button type="button" class="btn btn-primary  text-light" onclick="checkId('<?php echo $order['id']; ?>')">
                        Change Status
                      </button>
                    </span>
                  </td> -->
              <!-- <td><span class="resize-col"><?php echo $order['status'] ?></span></td> -->
              <td><span class="resize-col"><?php echo $order['total_price'] ?></span></td>
              <td>
                <span class="resize-col">
                  <a href="order_sumary.php?id=<?php echo $order['id']; ?>" class="btn btn-primary text-light"
                    style="text-decoration: none;">Order Sumary</a>
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
  <script>
  function checkId(id) {
    // alert(id);
    $('#order_id').val(id);
    $('#exampleModal').modal('show');
  }
  </script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>