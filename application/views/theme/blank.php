<!DOCTYPE html>
<html>
    <?php include_once "includes/head.php"; ?>
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
            		<h1>Blank</h1>
            	</div>
            	<!-- Page Heading End-->
                <div class="row">
					<div class="col-md-12 portlets">
                        <!-- Get Grocery CRUD Table Here. -->
                        <?php echo $output; ?>
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
	</body>
</html>