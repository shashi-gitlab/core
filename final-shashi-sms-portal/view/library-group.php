<?php
session_start();
	if(!isset($_SESSION['ses_status'])):
		// echo 111;
		header("location:index.php");
	endif;
	require_once"header.php";
?>
	<!-- /////////////////////////////////////////////// Body content part start from here //////////////////////////////////////////////////////	 -->
		
			<section class="sms">
				<div class="container">
						<div class="col-md-6 middle">
							<form class="lbr_form box text-center">
								<h2 class=""><strong>Create Library</strong></h2>
									<!-- <b>Library Name:</b>  -->
									<input type="text" placeholder="Enter Library Name" name="name"><br>
									<input type="button" Value="Create Library" class="lbr-btn"/>
								<div class="lib_err text-white"></div>
							</form>
						</div>
					
					<div class="col-md-6 middle">
							<form class="lg_grp_form box text-center">
								<h2><strong>Create Group</strong></h2>
									<!-- <b>Group Name: </b>							 -->
									<input type="text" placeholder="Enter Group Name" name="name"><br>
									<input type="button" Value="Create Group" class="grp-btn"/>
								
								<div class="lg_grp_err text-white"></div>
							</form>
						</div>	
		
							
				 </div>
		</section>

<?php
	require_once"footer.php";
?>