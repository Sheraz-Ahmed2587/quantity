<?php
require_once("header.php");
require_once("sidebar.php");


$query="SELECT * from faq";
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
							<h4 class="mb-0 text-light"> Frequently Asked Questions</h4>
						</div>
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<a href="add_faq.php" class="btn btn-primary w-100">Add  FAQ's</a>
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
							<h4 class="mt-4"><?php  echo $rec['question'] ?> </h4>
							<p class="mt-3"><?php  echo $rec['answer'] ?></p>

							<div class="row">
								<div class="col-md-6">
									<a href="update_faq.php?id=<?php  echo $rec['id']; ?>" class="btn btn-primary w-100 text-dark">Edit</a>
								</div>
								<div class="col-md-6">
									<a href="action.php?del_faq=<?php  echo $rec['id']; ?>" class="btn btn-outline-danger w-100 text-dark">Trash</a>
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