<?php
session_start();

session_regenerate_id(true);

unset($_SESSION['ses_name']);
unset($_SESSION['ses_id']);
unset($_SESSION['ses_status']);
unset($_SESSION['ses_mobile']);
unset($_SESSION['ses_email']);

session_destroy();
header("location:index.php");
?>