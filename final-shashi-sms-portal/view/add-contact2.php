<?php
session_start();
	if(!isset($_SESSION['ses_status'])):
		// echo 111;
		header("location:index.php");
	endif;
	require_once"header.php";
?>
	<!-- /////////////////////////////////////////////// Body content part start from here //////////////////////////////////////////////////////	 -->
		
			<div class="row">
				<div class="col-md-6 col-sm-4 col-xs-3 middle">
					<form class="contact_form box">
						<h2 class="text-center"><strong>Add Contact</strong></h2>
						<div class="text">
							<div>Contact Name : </div>
							<div>Mobile Number: </div>
							<div>Select Group: </div>
						</div>
						<div >
							<input type="text" placeholder="Full Name" name="name"/><br>
							<input type="text" placeholder="Enter Mobile No." name="mob"/><br>
							<select name="group-name">
								<!-- <option>Select group</option> -->
								<?php
								$result = $obj->get_group();
								// echo "<pre>";
								// print_r($result);
								// echo "</pre>";

								if(is_array($result)):
								foreach($result as $val):	
								?>
								<option value="<?php echo $val->grp_name;?>"> <?php echo $val->grp_name;?> </option>
								<?php
								endforeach;
								endif;
								?>
								
							</select>
							<input type="button" Value="Add Contact" class="contact-btn"/>
						</div>
					<div class="contact_err"></div>	
				</form>

				</div>
						<div class="col-md-6 col-sm-4 col-xs-3">
						<div class="box text-center">
							<h2><strong>List of contact</strong></h2>
							<div class="col-md-6 col-sm-4 col-xs-3">
								<ul><li><b>Name</b><li></ul>
								<ul>
									<?php														
									
										$result=$obj->get_contact();
										if(is_array($result)):
										// 	echo "<pre>";
										// print_r($result);
										// echo "</pre>";
										foreach ($result as $val):
									?>
									<li><a href="" class="contact-btn" for="<?php echo $xyz->log_id; ?>"><?php echo $val->cont_name;?></a></li>
										
										
									<?php
									endforeach;
										endif;
									?>
								</ul>
							</div>
							<div class="col-md-6 col-sm-4 col-xs-3">
								<ul><li><b>Contact</b> <li></ul>
								<ul>
									<?php 
										$result=$obj->get_contact();
										if(is_array($result)):
										// 		echo "<pre>";
										// print_r($result);
										// echo "</pre>";
											foreach ($result as $val):
									?>
									<li><a href=""><?php echo $val->cont_no;?></a></li>
									<?php 
									endforeach;
										endif;
									?>
								</ul>
							</div>

						</div>
					</div>
					
				</div>




			
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			

<?php
	require_once"footer.php";
?>