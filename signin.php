<?php include("includes/header.php"); ?>
	<section class="login-form">
		<div class="container">
			<div class="login-position">
				<div class="login-container">
					<form>
						<div class="user-image">
							<i class="fa fa-user"></i>
						</div>
						<div class="login-header">
							<h4>Sign In</h4>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12 mb-4">
								<label>User name</label>
							</div>
							<div class="col-lg-8 col-md-8 col-12 mb-4">
								<input type="text" name="usr"> 
							</div>
							<div class="col-lg-4 col-md-4 col-12 mb-4">
								<label>Password</label>
							</div>
							<div class="col-lg-8 col-md-8 col-12 mb-4">
								<input type="password" name="pword">
							</div>
							<div class="col-lg-12">
								<input type="submit" value="Login"/>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php include("includes/footer.php"); ?>