<?php
session_start();
	if(!isset($_SESSION['ses_status'])):
		// echo 111;
		header("location:index.php");
	endif;
	require_once"header.php";
?>
	<!-- /////////////////////////////////////////////// Body content part start from here //////////////////////////////////////////////////////	 -->
	<div class="sms">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="box">
						<form class="contact_form">
					
						<h2 class="text-center"><strong>Add Contact</strong></h2>
						
							<strong class="text-white">Contact Name :</strong> <input type="text" placeholder="Full Name" name="name"/><br>
						<strong class="text-white">	Mobile Number: </strong><input type="text" placeholder="Enter Mobile No." name="mob"/><br>
							<strong class="text-white">Select Group:	</strong>
							&nbsp;
							<select name="group-name">
								<!-- <option>Select group</option> -->
								<?php
								$user_id=$_SESSION['ses_id'];							
								$result = $obj->get_group($user_id);
								// echo "<pre>";
								// print_r($result);
								// echo "</pre>";

								if(is_array($result)):
								foreach($result as $val):	
								?>
								<option value="<?php echo $val->grp_id;?>"> <?php echo $val->grp_name;?> </option>
								<?php
								endforeach;
								endif;
								?>
								
							</select>
							
						
						<div class="text-center">
							<input type="button" Value="Add Contact" class="btn btn-warning contact-btn"/>
						</div>
					<div class="contact_err text-center" style="color:red;"></div>	
					</form>
				</div>
				</div>
				
						<div class="col-md-6 col-sm-6
						 ">
						<div class="box text-center">
							<h2><strong>List of contact</strong></h2>
							<div class="col-md-6 col-sm-4 col-xs-3">
								<ul><li><b>Name</b><li></ul>
								<ul>
									<?php														
										
										$result=$obj->get_contact($user_id);
										if(is_array($result)):
										// 	echo "<pre>";
										// print_r($result);
										// echo "</pre>";
										foreach ($result as $val):
									?>
									<li><a href="" class="contact-btn namedisplay" for="<?php echo $xyz->log_id; ?>"><?php echo $val->cont_name;?></a></li>
										
										
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
										$result=$obj->get_contact($user_id);
										if(is_array($result)):
										// 		echo "<pre>";
										// print_r($result);
										// echo "</pre>";
											foreach ($result as $val):
									?>
									<li><a href="" class=""><?php echo $val->cont_no;?></a></li>
									<?php 
									endforeach;
										endif;
									?>
								</ul>
							</div>

						</div>
					</div>
					
				</div>
</div>
</div>
</div>


			
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			

<?php
	require_once"footer.php";
?>