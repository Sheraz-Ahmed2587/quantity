<?php
require_once("header.php");
require_once("sidebar.php");
?>

<!-- main content start -->
<div class="main-content">

	<div class="main-content">
		<div class="dashboard-breadcrumb mb-25">
			<h2>Add Testimonials Fields</h2>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel mb-25">
					<div class="panel-body">
						<div class="row g-3">
							<form method="POST" action="action.php" enctype="multipart/form-data">
								<div class="col-sm-12">
									<label for="basicInput" class="form-label">Name</label>
									<input type="text" class="form-control" id="basicInput" name="name">
								</div>

								<div class="col-sm-12 mt-3">
									<label for="basicInput" class="form-label">Description</label>
									<textarea id="editor" name="dcp"></textarea>
								</div>

								<div class="col-sm-12 mt-3">
									<label for="basicInput" class="form-label">Designation</label>
									<input type="text" class="form-control" id="basicInput" name="designation">
								</div>

								<div class="col-sm-12 mt-3">
									<label for="formFile" class="form-label">Upload Your Image</label>
									<input class="form-control" type="file" id="formFile" name="image">
								</div>

								<div class="row mt-3">
									<div class="col-md-4 mx-auto">
										<button class="btn btn-success w-100" type="submit" name="add_testimonials">Submit</button>
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