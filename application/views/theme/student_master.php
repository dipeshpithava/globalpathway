<!DOCTYPE html>
<html>
    <?php include_once "includes/head.php"; ?>
    <link href="<?=base_url()?>assets/libs/dropzone/css/dropzone.css" rel="stylesheet" type="text/css" />
    <body class="fixed-left">
    <?php include_once "includes/modal.php"; ?>
	<!-- Begin page -->
	<div id="wrapper">
        <?php include_once "includes/header.php"; ?>
		<?php include_once "includes/left_sidebar.php"; ?>
		<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
            	<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1>Student Master</h1>
            	</div>
            	<!-- Page Heading End-->
                <div class="row">
                	<div class="panel-group accordion-toggle" id="accordiondemo">
                		<div class="panel panel-default">
                			<div class="panel-heading">
                				<h4 class="panel-title">
                					<a data-toggle="collapse" data-parent="#accordiondemo" href="#accordion1" class="collapsed">
                						Upload Student Data
                					</a>
                				</h4>
                			</div>
                			<div id="accordion1" class="panel-collapse collapse">
                				<div class="panel-body">
                					<div class="col-md-12 portlets">
				                		<div class="widget">
											<form action="<?=base_url()?>index.php/students/create_student_data" class="dropzone" id="dropzone" enctype="multipart/form-data">
												<div class="fallback">
											    	<input name="student_file" id="student_file" type="file" />
											  	</div>
											</form>
										</div>
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>
					<div class="col-md-12 portlets">
						<form method="post" action="<?=base_url()?>index.php/student_master" role="form">
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="student_name">Student Name</label>
		                        	<input type="text" name="student_name" id="student_name" class="form-control" />
		                        </div>
							</div>
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="grade">Grade</label>
		                        	<input type="text" name="grade" id="grade" class="form-control" />
		                        </div>
							</div>
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="board">Board</label>
		                        	<input type="text" name="board" id="board" class="form-control" />
		                        </div>
							</div>
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="address">Address</label>
		                        	<input type="text" name="address" id="address" class="form-control" />
		                        </div>
							</div>
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="dob">DOB</label>
		                        	<input type="text" name="dob" id="dob" class="form-control" />
		                        </div>
							</div>
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="reference">Reference</label>
		                        	<input type="text" name="reference" id="reference" class="form-control" />
		                        </div>
							</div>
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="batch">Batch</label>
		                        	<input type="text" name="batch" id="batch" class="form-control" />
		                        </div>
							</div>
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="school_name">School</label>
		                        	<input type="text" name="school_name" id="school_name" class="form-control" />
		                        </div>
							</div>
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="field">Field</label>
		                        	<input type="text" name="field" id="field" class="form-control" />
		                        </div>
							</div>
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="year_of_seeking_admission">Year of Seeking Admission</label>
		                        	<input type="text" name="year_of_seeking_admission" id="year_of_seeking_admission" class="form-control" />
		                        </div>
							</div>
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="date_of_presentation">Presentation Date</label>
		                        	<input type="text" name="date_of_presentation" id="date_of_presentation" class="form-control" />
		                        </div>
							</div>
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="data_collected">Data Collected</label>
		                        	<input type="text" name="data_collected" id="data_collected" class="form-control" />
		                        </div>
							</div>
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="calling_status_abbr">Abbreviation</label>
		                        	<input type="text" name="calling_status_abbr" id="calling_status_abbr" class="form-control" />
		                        </div>
							</div>
							<div class="col-md-3">
		                        <div class="form-group">
		                        	<label for="student_category">Student Category</label>
		                        	<input type="text" name="student_category" id="student_category" class="form-control" />
		                        </div>
							</div>
						</form>
					</div>
				</div>
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->
        </div>
		<!-- End right content -->
	</div>
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<?php include_once "includes/footer_script.php"; ?>
	<script src="<?=base_url()?>assets/libs/dropzone/dropzone.min.js"></script>
	<script src="<?=base_url()?>assets/js/pages/tabs-accordions.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#student_file").change(function(){
			console.log("Hello");
			$("#dropzone").submit();
		});
	});
	</script>
	</body>
</html>