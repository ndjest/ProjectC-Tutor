<?php 
	require '../inc/script.php';
	$classObj = new tutor;
	$classObj->connection();

	if (isset($_COOKIE['user'])){
		setcookie("user", "", time() - 3600, "/");
		header("location: http://localhost/TutorialC++/login.php");
	}else{
		header("location: http://localhost/TutorialC++/login.php");		
	}

 ?>

