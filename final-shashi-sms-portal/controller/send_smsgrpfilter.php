<?php
	
	require_once '../model/db_project.php';
	// print_r($_POST);
	$grpid = $_POST['group_id'];
	// echo $grpid;
	// exit;
	$ans = $obj->contactgrp_wise_data($grpid);
	// echo "<pre>";
	// print_r($ans);
	// echo "</pre>";
	// exit;

	if(is_array($ans)):
	foreach($ans as $val):
		echo"<div class=conname for=$val->cont_no>";
		echo "$val->cont_name";
		echo"</div>";
		
	endforeach;
	endif;
	?>
