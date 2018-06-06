<?php
	require_once"../model/db_project.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>SMS PORTAL</title>
		<link rel="icon" href="../assets/images/icon.png">
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
		<!-- <link rel="stylesheet" type="text/css" href="../assets/css/responsive-stylesheet.css"> -->

		<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

	</head>
	
	<body>
		
		<div class="header">

			<div class="container header-container">
				<div class="row">
					<div class="col-md-4 text-center">
						<img src="../assets/images/sms.png" style="height:100px;">
					</div>
					<div class="col-md-8 ">
						<div class="menu">
							<!-- <a href="" id="menu-icon">SMS</a> -->
							<nav class="pull-right">
								<ul>
									<?php
									if(isset($_SESSION['ses_name'])):
									?>
									<li><a href="library-group.php">Library/Group</a></li>
									<li><a href="create-message.php">Create Message</a></li>
									<li><a href="add-contact.php">Add Contact</a></li>
									<li><a href="send-sms.php">Send sms</a></li>
									<li><a href="logout.php">Logout (<?php echo $_SESSION['ses_name'];?>)</a></li>
									<?php
										endif;
									?>
								
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="container welcome-box"> -->


