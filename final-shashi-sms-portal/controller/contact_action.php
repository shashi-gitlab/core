<?php
	require_once"../model/db_project.php";
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";

	$reg_exp= "/^[a-zA-Z]+[( )]?[a-zA-Z]+$/";
	$reg_name=preg_match($reg_exp, $_POST['name']);
	if ($reg_name!==1)
	 	{
			echo "Enter Valid Name";
		}
	else
	{
		$reg_exp= "/^\d{10,10}$/";
		$reg_mob=preg_match($reg_exp, $_POST['mob']);
		if ($reg_mob!==1)
		 	{
				echo "Enter Valid mobile no.";
			}
		else
		{
			$mobile= $_POST['mob'];
			$name=$_POST['name'];
			$grpname=$_POST['group-name'];
			$user_id=$_SESSION['ses_id'];
			$lbr_id=$_POST['group-name'];

			$ans=$obj->cnt("contact","cont_no='$mobile'");
			if($ans!=0)
			{
				echo "Mobile no already exist";
			}
			else{
				if(empty($_POST['group-name']))
				{
					echo "Select group";
				}
				else
				{
					
				
					 $obj->insert("contact","cont_name, cont_no, cont_group, log_id, grpid","'$name','$mobile','$grpname','$user_id','$lbr_id'");
					 echo 1;
					// echo $lbr_id;
					// exit;
			//		$ans = $obj->contact_wise_data($user_id);					
					// // echo "<pre>";
					// // print_r( $ans);					
					// // echo "</pre>";

					// if(is_array($ans)):
					// foreach($ans as $val):
					// 	echo "<li>";
						// echo "$val->cont_name<br/>";
		//				$name=$_POST['name'];
		//				echo $name;
						// echo $grp_id;
						// echo "</li>";
																						
					// endforeach;
					// endif;
					
									
				}
			}
		}
			
	}
?>