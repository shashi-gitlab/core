<?php 
	require_once"../model/db_project.php";
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";

	if(empty($_POST['name']))
	{
		echo "Please Enter Name";
	}
	else
	{
		if(empty($_POST['mobile']))
		{
			echo "Please Enter Number";
		}
		else
		{
			if(empty($_POST['area']))
			{
				echo "Please Enter Message";
			}
			else
			{
				$mob=$_POST['mobile'];
				$msg=$_POST['area'];
								
					// Authorisation details.
					$username = "shashim2507@gmail.com";
					$hash = "77be9e19a26f3fb3a0e8ef948bec697e4a4e2efc";

					// Config variables. Consult http://api.textlocal.in/docs for more info.
					$test = "0";

					// Data for text message. This is the text message data.
					$sender = "TXTLCL"; // This is who the message appears to be from.
					$numbers = "91$mob"; // A single number or a comma-seperated list of numbers
					$message = $msg;
					// 612 chars or less
					// A single number or a comma-seperated list of numbers
					$message = urlencode($message);
					$url = "http://api.textlocal.in/send/?username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
					echo $url;
					$result = file($url);
					print_r($result);
					
			}
		}

	}
		
?>