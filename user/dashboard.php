<?php
require_once("header.php");
require_once("sidebar.php");

?>



<!-- main content start -->
<div class="main-content">
    <div class="dashboard-breadcrumb mb-25">
        <h2>Coach Dashboard</h2>

    </div>
    <div class="row mb-25">

        <div class="col-lg-4 col-6 col-xs-12">
            <div class="card main_card" style="padding-bottom:5px;">
                <div class="card-body">
                    <h4>Total Orders</h4>
                    <p>20</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-6 col-xs-12">
            <div class="card main_card" style="padding-bottom:5px;">
                <div class="card-body">
                    <h4>Pending</h4>
                    <p>
                        40
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-6 col-xs-12">
            <div class="card main_card" style="padding-bottom:5px;">
                <div class="card-body">
                    <h4>Comlete Order</h4>
                    <p>30</p>
                </div>
            </div>
        </div>


    </div>

    <?php
    require_once("footer.php")
    ?>