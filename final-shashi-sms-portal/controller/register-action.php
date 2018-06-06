<?php
	
	require_once"../model/db_project.php";
    
 //    echo"<pre>";
	// print_r($_POST);
	// echo "</pre>";

	 $exp="/^[a-zA-Z]+( )?[a-zA-Z]+$/";
	 $exp_name=preg_match($exp,$_POST['name']);
	 if ($exp_name!==1)
	  {
	 	echo "Invalid name";
	 }
	 else
	 {
		 	 $rg_exp="/^([a-z0-9][a-z0-9_\.]{1,}[a-z0-9])@([a-z0-9][a-z0-9_\-]{1,}[a-z0-9])([a-z]{2,})(\.[a-z]{2,})?$/";
			 $exp_mail=preg_match($rg_exp,$_POST['email']);
			 if ($exp_mail!==1)
			 {
			 	echo "Invalid email";
			 }
			 else
			 {	
			 	$reg_mbl= "/^[1-9]{9}$/";
				$reg_mob=preg_match($reg_mbl, $_POST['mobile']);
				if ($reg_mob!==1)
				 {
					echo "Enter Valid Mobile Number";
				}
				else
				{
				 // $rg_exp="/^([a-z0-9][a-z0-9_\.]{1,}[a-z0-9])@([a-z0-9][a-z0-9_\-]{1,}[a-z0-9])([a-z]{2,})(\.[a-z]{2,})?$/";
			 	$rg_exp="/^[a-z0-9][a-z0-9_\.@]{1,}[a-z0-9]+$/";
				 $exp_pass=preg_match($rg_exp,$_POST['pass']);
				 if ($exp_pass!==1)
				 {
				 	echo "Invalid pass";
				 }
				 else if ($_POST['cpass']!=$_POST['pass'])
				 {
				 	
				 		 	echo "Invalid pass";	
				}
					 				 
					  else
				 {
					 $pass = sha1($_POST['pass']);
					 $mob=$_POST['mobile'];
						// // // echo $pass;
					 $email = $_POST['email'];
					 $name = $_POST['name'];
					 $ans=$obj->cnt("login","email='$email'");
					 if($ans!=0)
					 {
					 	echo "Email id already exist";
					 }
					 else{
		 $obj->insert("login","name, email, mobile, pass, status","'$name','$email', '$mob','$pass',0");
							 	echo 1;
						}
				}	}
		}		

	}

			 
	   
?>