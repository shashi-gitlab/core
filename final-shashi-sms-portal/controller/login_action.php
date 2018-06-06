<?php
	require_once"../model/db_project.php";
	// echo"<pre>";
	// print_r($_POST);
	// echo "</pre>";

	// echo "string";
		 	 $rg_exp="/^([a-z0-9][a-z0-9_\.]{1,}[a-z0-9])@([a-z0-9][a-z0-9_\-]{1,}[a-z0-9])([a-z]{2,})(\.[a-z]{2,})?$/";
			 $exp_mail=preg_match($rg_exp,$_POST['email']);
			 if ($exp_mail!==1)
			 {
			 	echo "Invalid email";
			 }
			 else
			 {
				 $rg_exp="/^[a-z0-9][a-z0-9_\.@]{1,}[a-z0-9]+$/";
				 $exp_pass=preg_match($rg_exp,$_POST['pass']);
				 if ($exp_pass!==1)
				 {
				 	echo "Invalid pass";
				 }				 				 
				  else
				 {
					 $pass = sha1($_POST['pass']);
						// // echo $pass;
					 $email = $_POST['email'];
						// $name = $_POST['name'];
						$result= $obj->select("id, name, email, pass, status, mobile","login","email='$email'");
						 	if ($result==0)
						 	 {
						 	    echo "Email Id does not exist";
						 	}
						 	else{
						 		$password=$result[0]->pass;
						 		if ($password==$pass)
						 		 {
						 		 	$_SESSION['ses_email']=$_POST['email'];
						 		 	
						 		 	$_SESSION['ses_name']=$result[0]->name;
									$_SESSION['ses_status']=$result[0]->status;
									$_SESSION['ses_mobile']=$result[0]->mobile;
									$_SESSION['ses_id']=$result[0]->id;
										 			
						 			echo 1;
						 			
						 		}
						 		else
						 		{
						 			echo "Password does not matche";
						 		}
						 	}
					}		

	}

			 
	   
?>