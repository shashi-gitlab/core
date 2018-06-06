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
				
				 <div class="message">
				 	<div class="box">
				 		<div>
							<form class="message_form">
								<h2 class="text-center">Create Messages</h2>
									<strong class="text-white">Select Library:</strong>&nbsp;&nbsp;&nbsp;&nbsp;<select name="lbrname">
										<!-- <option>Select library</option> -->
										<?php
										$user_id=$_SESSION['ses_id'];
										$result = $obj->get_library($user_id);
										// echo "<pre>";
										// print_r($result);
										// echo "</pre>";

										if(is_array($result)):
										foreach($result as $val):	
										?>
										<option value="<?php echo $val->lib_id;?>"> <?php echo $val->lib_name;?> </option>
										<?php
										endforeach;
										endif;
										?>
									</select><br>
									<strong class="text-white">Message:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea type="text" name="name"></textarea>					
								
									<!-- <input type="button" Value="Create Messages" class="btn btn-default btn-warning msg-btn text-center"/> -->
							
								
							</form>
				</div>
				<div class="text-center">
					<input type="button" Value="Create Messages" class="btn btn-default btn-warning msg-btn text-center"/>
					
				</div>
					<div class="msg_err text-white"></div>
				</div>
				</div>
		</div>
		
		

<?php
	require_once"footer.php";
?>