<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
<title>Answer - CRUD</title>
<link
	href="<?php echo base_url('assets/css/bootstrap/bootstrap.min.css')?>"
	rel="stylesheet">
</head>
<body>
	<div class="container">
	<!-- Text input-->
		<div class="form-group">
			<div class="col-md-4">
				<input id="student-id" name="student-id" type="hidden"
					class="form-control input-md" 
					value="<?php echo $student_id;?>" disabled>
			</div>
		</div>
	
		<div class="row">
			<!-- FORM  -->
			<div class="col-md-12">
				<form class="form-inline" id="form-edit-answer">
						<!-- Form Name -->
						<legend><b>Answer</b></legend>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="student-description"><b>Student:</b></label>
							<div class="col-md-8">
								<input id="student-description" name="student-description" type="text"
									   class="form-control-plaintext">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8">
								<input id="test-id" name="test-id" type="hidden"
									class="form-control input-md" 
									value="<?php echo $test_id;?>" disabled>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group row">
							<label class="col-md-4 control-label" for="test-description"><b>test:</b></label>
							<div class="col-md-4">
								<input id="test-description" name="test-description" type="text"
									   class="form-control-plaintext">
							</div>
						</div>

						<!-- Button -->

				</form>
				<div class="form-group">
					<label class="col-md-4 control-label" for="btn-save"></label>
					<div class="col-md-4" id="saveupdate">
						<button id="btn-save" name="btn-save" class="btn btn-success"
							onclick="save_answer()">Save</button>
					</div>
				</div>
			</div>

			<!-- LIST -->
			<div class=col-md-12>
				List of answers
				<table class="table table-bordered table-condensed table-hover">
					<thead>
						<tr>
							<th>Id</th>
							<th>Description</th>
							<th>Selected</th>
						</tr>

					</thead>
					<tbody id="form-list-answer-body">

					</tbody>
				</table>
			</div>
			<br> 
			<!-- view -->
		</div>
	</div>
	<script>
  		var BASE_URL = <?php echo json_encode(site_url()); ?>;</script>
	<script
		src="<?php echo base_url('assets/js/jquery/jquery-3.3.1.min.js')?>"></script>
	<script
		src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js')?>"></script>
	<script
		src="<?php echo base_url('assets/js/notify/notify.min.js')?>"></script>
	<script
		src="<?php echo base_url('application/views/answer/answer.js')?>"></script>

</body>
</html>