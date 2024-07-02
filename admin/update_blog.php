<?php
require_once("header.php");
require_once("sidebar.php");

$id=$_GET['id'];
$data="SELECT * FROM blog WHERE id='$id'";
$rec=db::getRecord($data);
?>

<!-- main content start -->
<div class="main-content">

	<div class="main-content">
		<div class="dashboard-breadcrumb mb-25">
			<h2>Update Our Blog Fields</h2>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel mb-25">
					<div class="panel-body">
						<div class="row g-3">
							<form method="POST" action="action.php" enctype="multipart/form-data">
								<div class="col-sm-12">
									<label for="basicInput" class="form-label">Heading</label>
									<input type="text" class="form-control" id="basicInput" name="heading" value="<?php echo $rec['heading']; ?>">
								</div>

								<div class="col-sm-12 mt-3">
									<label for="basicInput" class="form-label">Description</label>
									<textarea id="editor" name="dcp"><?php echo $rec['dcp']; ?></textarea>
								</div>

								<div class="col-sm-12 mt-3">
									<label for="basicInput" class="form-label">Date</label>
									<input type="date" class="form-control" id="basicInput" name="date" value="<?php echo $rec['date']; ?>">
								</div>

								<div class="col-sm-12 mt-4">
									<label for="formFile" class="form-label">Upload Your Image</label>
									<input class="form-control" type="file" id="formFile" name="image">
								</div>

								<input type="hidden" name="id" value="<?php echo $rec['id']; ?>">

								<div class="row mt-4">
									<div class="col-md-4 mx-auto">
										<button class="btn btn-success w-100" name="update_blog" type="submit">Update</button>
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