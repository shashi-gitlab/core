<?php
	session_start();
	if(isset($_SESSION['ses_status'])):
		// echo 111;
		header("location:welcome.php");
	endif;
	require_once"index-header.php";

?>
	<!-- /////////////////////////////////////////////// Body content part start from here //////////////////////////////////////////////////////	 -->
		<div class="sms">
			<div class="container">
					<div class="col-md-6 ">
						<div class="box text-center">
							<h2><strong>Registration Form </strong></h2>
							<form id="rg-form">
								<input type="text" placeholder="Full Name" name="name"/>
								<input type="text" placeholder="Enter Your Email-Id" name="email"/>
								<input type="text" placeholder="Enter Your Mobile No." name="mobile"/>
								<input type="password" placeholder="Choose Your Password" name="pass"/>
								<input type="password" placeholder="Confirm Password" name="cpass"/>
                                <input type="button" Value="Register" class="btn btn-warning rg-btn"/>
                                <input type="reset" class="btn btn-warning"/>
                                <div class="rg_err"></div>
							</form>
							
						</div>
					</div>
					<div class="col-md-6 ">
						<div class="box text-center">
							<h2><strong>Login Form</strong></h2>
							<form id="lg-form">
								<input type="text" placeholder="Enter Your Email-Id" name="email"/>
								<input type="password" placeholder="Enter Your Password" name="pass"/>
								<input type="button" Value="Login" class="btn btn-warning lg-btn"/>
								<div class="rg-err"> </div>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			

<?php
	require_once"footer.php";
?>