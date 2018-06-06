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
							<h2><strong>Send SMS</strong></h2>
							<form id="message-form">
								<input type="text" placeholder="Enter name" name="name"/>
								<input type="text" placeholder="Enter number" name="number"/>
								<textarea type="textarea" name="msg"></textarea>
								<input type="button" Value="Login" class="btn btn-warning send_sms"/>
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