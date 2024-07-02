<?php
require_once("header.php");
require_once("sidebar.php");


$query="SELECT * from product";
$recs=db::getRecords($query);
?>

<!-- main content start -->
<div class="main-content">
	<div class="row mb-5">
		<div class="col-md-12">
			<div class="card" style="background: #000000;">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<h4 class="mb-0 text-light">Our Product</h4>
						</div>
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<a href="add_product.php" class="btn btn-primary w-100">Add  Product</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row mb-25">
		<?php
		if($recs)
		{
			foreach($recs as $rec)
			{
				?>
				<div class="col-lg-4 col-6 col-xs-12">
					<div class="card main_card h-100">
						<div class="card-body">
							<img src="uploads/<?php  echo $rec['image'] ?>">
							<h1 class="mt-4"><?php  echo $rec['price'] ?></h1>
							<h5 class="mt-2"><?php  echo $rec['heading'] ?> </h5>
							<p><?php  echo $rec['dcp'] ?></p>
							<p>
								Categoreis: <?php
								$w=$rec['cat_id'];
								$get="SELECT * FROM categories WHERE id='$w'"; 
								$data=db::getRecord($get);
								echo $data['name']; 
								?>
							</p>
							<div class="row">
								<div class="col-md-6">
									<a href="update_product.php?id=<?php  echo $rec['id']; ?>" class="btn btn-primary w-100 text-dark">Edit</a>
								</div>
								<div class="col-md-6">
									<a href="action.php?del_product=<?php  echo $rec['id']; ?>" class="btn btn-outline-danger w-100 text-dark">Trash</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
		}
		?>
	</div>

	<?php
	require_once("footer.php")
?>