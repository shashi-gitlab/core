<?php
	
	require_once '../model/db_project.php';
	// print_r($_POST);
	$id = $_POST['library_id'];
	// echo $id;
	// exit;
	$ans = $obj->library_wise_data($id);
	// echo "<pre>";
	// print_r($ans);
	// echo "</pre>";
	// exit;

	if(is_array($ans)):
	foreach($ans as $val):
		echo"<div class=msgdisplay>";
		echo "$val->msg_name";
		echo"</div>";
		
	endforeach;
	endif;
	?>
