<?php
	require_once"../model/db_project.php";
	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";

	$reg_exp= "/^[a-zA-Z][ a-zA-Z]{3,}$/";
	$reg_name=preg_match($reg_exp, $_POST['name']);
	if ($reg_name!==1)
	 {
		echo "Enter Valid Name";
	}
	else
	{
		$name= $_POST['name'];
		$user_id=$_SESSION['ses_id'];	
		$result= $obj->select("grp_id, grp_name","lg_group","log_id='$user_id'");

		// echo $user_id;	
		$ans=$obj->cnt("lg_group","grp_name='$name'");
		if($ans!=0)
		{
			echo "This group already exist";
		}		
		else
		{
			$obj->insert("lg_group","grp_name , log_id","'$name' , '$user_id' ");						
		echo 1;	
		}
	}
?>