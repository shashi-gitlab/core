<?php
	session_start();
	if(!isset($_SESSION['ses_status'])):
		// echo 111;
		header("location:index.php");
	endif;
	require_once"header.php";
?>
		<section class="sms">
			<div class="container">
				<div class="col-md-3 col-sm-3">
					
					<div class="box">

						<h2 class="text-center">Library</h2><br>
						<div class="bottom-border">
							<ul>
								<?php 
									$user_id=$_SESSION['ses_id'];
									$result=$obj->get_library($user_id);

									if(is_array($result)):
										foreach ($result as $val):
								?>
								<li><a href="" class="libclick" for="<?php echo $val->lib_id;?>"><?php echo $val->lib_name;?></a></li>

								<?php
								$lib_id=$val->lib_id;
								endforeach;
									endif;
								?>
							</ul>
							
						</div><br><br>
						<h2 class="text-center">Message</h2>
					 	
							<div class="bottom-border message" style="cursor:pointer"> 
							<a href=""></a></div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="box text-center">
						<h2 class="text-center"><strong >Send SMS</strong></h2>
							
							<form id="message">								
								<input type="text" placeholder="Enter Name" name="name" id="entername"><br>
								<input type="text" placeholder="Enter Number" name="mobile" id="no"><br>
								<textarea type="text" name="area" class="txt" id="msg"></textarea><br/>
								<button type="button" class="btn btn-warning send-sms">Send SMS</button></br>
								<div class="err_msg" style="color:red;"></div>
							</form>
						</div>
								
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="box">
						<h2 class="text-center">Group</h2><br>
						<div class="bottom-border">
							<?php 
									$user_id=$_SESSION['ses_id'];
									$result=$obj->get_group($user_id);
									if(is_array($result)):
										foreach ($result as $val):
								?>

							<a href="" class="grpclick" for="<?php echo $val->grp_id;?>"><?php echo $val->grp_name;?><br></a>
							<?php
								endforeach;
									endif;
								?>
						</div><br><br>
						<h2 class="text-center">Names</h2>
						
						<div class="bottom-border cont-name" style="cursor:pointer"> </div>
						
					</div>
				</div>
				</div>
			</section>
		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			

<?php
	require_once"footer.php";
?>