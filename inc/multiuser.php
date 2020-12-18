<?php 
	
	function multiusers($con, $useremail){
		$sql = mysqli_query($con, "SELECT * FROM `users` WHERE u_email ='$useremail' OR regno = '$useremail'");
		$row = mysqli_fetch_assoc($sql);
		 //print_r($row);

		if($row['role']=='admin'){
			$page = 'admin.php';
		}elseif ($row['role']=='lecturer') {
			$page = 'lecturer.php';
		}elseif ($row['role']=='student') {
			$page = 'student.php';
		}else{
			$page = 'index.php';
		}

		 return $page;
	}
 ?>