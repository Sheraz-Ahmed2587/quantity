<?php
require_once("header.php");
require_once("sidebar.php");


$query="SELECT * from logo ";
$logo=db::getRecord($query);
?>

<!-- main content start -->
<div class="main-content">

	<div class="main-content">
		<div class="dashboard-breadcrumb mb-25">
			<h2>Update LOGO Fields</h2>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel mb-25">
					<div class="panel-body">
						<div class="row g-3">
							<form method="POST" action="action.php" enctype="multipart/form-data" >
								<div class="col-sm-12 ">
									<label for="formFile" class="form-label">Upload Your Image</label>
									<input class="form-control" type="file" id="formFile" name="image">
								</div>

								<div class="col-sm-12 mt-3">
									<label for="basicInput" class="form-label">Description</label>
									<textarea id="editor" name="dcp"><?php echo $logo['dcp']; ?></textarea>
								</div>

								<input type="hidden" name="id" value="<?php echo $logo['id']; ?>">

								<div class="row mt-3">
									<div class="col-md-4 mx-auto">
										<button type="submit" name="update_logo"  class="btn btn-success w-100">Update</button>
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
	require_once("footer.php")
	?>
	<script>
		ClassicEditor
		.create(document.querySelector('#editor'))
		.catch(error => {
			console.error(error);
		});
	</script>