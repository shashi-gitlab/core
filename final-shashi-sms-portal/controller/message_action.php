<?php
	require_once"../model/db_project.php";

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	if(empty($_POST['lbrname']))
	{
		echo "Please select library";
	}
	else{
	$reg_exp= "/^[a-zA-Z\._ ?]{3,}[a-zA-Z\._?]+$/";
	$reg_name=preg_match($reg_exp, $_POST['name']);
	if ($reg_name!==1)
	 {
		echo "Please type prper message";
	}
	else
	{
		// $lbr_id=$obj->
		$msgname= $_POST['name'];
		$lbr_id=$_POST['lbrname'];
		$user_id=$_SESSION['ses_id'];
		$ans=$obj->cnt("message","msg_name='$msgname'");
		if($ans!=0)
		{
			echo "This message exist";
		}		
		else
		{
			$obj->insert("message","msg_name,lbr_id , log_id","'$msgname','$lbr_id', '$user_id'");
		echo 1;	
		}
	}
	}
?>