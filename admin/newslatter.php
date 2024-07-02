<?php
require_once("header.php");
require_once("sidebar.php");

$query = "SELECT * from newslatter";
$recs = db::getRecords($query);
?>



<div class="modal" id="exampleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="inputMessage" class="form-label">Message:</label>
                    <textarea class="form-control" id="inputMessage" rows="4" placeholder="Enter your message"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send email</button>
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
                            <h4 class="mb-0 text-light">newslatter Us</h4>
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
                            <th><span class="resize-col">Email</span></th>
                            <th><span class="resize-col">Action</span></th>
                            <th><span class="resize-col">Send Email</span></th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if ($recs) {
                            foreach ($recs as $rec) {
                        ?>
                                <tr>
                                    <td><span class="resize-col"><?php echo $rec['email'] ?></span></td>
                                    <td><span class="resize-col">
                                            <a href="action.php?del_newslatter=<?php echo $rec['id']; ?>" class="btn w-100 btn-danger text-light" style="text-decoration: none;">Trash</a>
                                        </span></td>
                                    <td><span><button type="button" class="btn btn-primary  text-light" onclick="openModal('<?php echo $rec['id']; ?>')">
                                                Send Email
                                            </button></span></td>
                                </tr>

                        <?php
                            }
                        }
                        ?>


                    </tbody>
                </table>

                <div class="col-12 mt-3">

                </div>

            </div>
        </div>
    </div>
    <?php
    require_once("footer.php")
    ?>

    <script>
        function openModal(id) {
            alert(id);
            $('#exampleModal').modal('show');
        }
    </script>