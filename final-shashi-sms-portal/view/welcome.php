<?php
	session_start();
	if(!isset($_SESSION['ses_status'])):
	header("location:index.php");
	endif;
	require_once"header.php";
	
?>
	<!-- /////////////////////////////////////////////// Body content part start from here //////////////////////////////////////////////////////	 -->
	
			<div class="container sms">
				<div class="row">
					<div class="col-md-12 col-sm-8 col-xs-2">
						<div class="welcome-area text-center">
								<div class="welcome">
									<?php
									if(isset($_SESSION['ses_name'])):
									?>
									<h2>Welcome <?php echo $_SESSION['ses_name'];?></h2>
									<?php
									endif;
									?>
								</div>
								<div>
									<p>You can send Free SMS to any mobile number in India. More than 90% of messages are delivered under 10 seconds.</p>
								</div>
							</div>
						
						
					</div>
				 </div>
			</div>

<?php
	require_once"footer.php";
?>