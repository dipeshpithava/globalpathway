<!DOCTYPE html>
<html>
    <?php include_once "includes/login_head.php"; ?>
    <body class="fixed-left login-page">	
	<!-- Begin page -->
	<div class="container">
		<div class="full-content-center">
			<p class="text-center"><a href="#"><img src="<?=base_url()?>assets/img/login-logo.png" alt="Logo"></a></p>
			<div class="login-wrap animated flipInX">
				<div class="login-block">
					<img src="<?=base_url()?>images/users/default-user.png" class="img-circle not-logged-avatar">
					<form role="form" action="<?=base_url()?>auth/login" method="post">
						<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						<input type="text" class="form-control text-input" name="identity" placeholder="Username">
						</div>
						<div class="form-group login-input">
						<i class="fa fa-key overlay"></i>
						<input type="password" name="password" class="form-control text-input" placeholder="********">
						</div>
						<div class="row">
							<div class="col-sm-6">
							<button type="submit" class="btn btn-success btn-block">LOGIN</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>
	<?php include_once "includes/footer_script.php"; ?>
	</body>
</html>