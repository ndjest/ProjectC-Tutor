<?php
	include 'script.php';
	$useMe = new tutor;
	$conn = $useMe->connection();
	if(isset($_POST['addfile'])){
		$temp1 = $_FILES['file2']['name'];
		$temp2 = $_FILES['file2']['tmp_name'];
		$temp = explode('.', $temp1); 
		$doup = '_'.date('dmY_Hmi');
		$unique_key = str_shuffle('ABC0123');
		$newname = 'PDF_'.$unique_key.$doup.'.'.end($temp);
		// $newname = 'IMG_'.round(microtime(true)).$doup.'.'.end($temp);
		$target_dir = 'uploads/'.$newname;

		$filename = $_POST['topic'];
		$descrip =	$_POST['descript'];
		$flink = $target_dir;
		$dat = date("d-m-Y");
		//echo '<img src="'.$target_dir.'" style="width: 300px; height: auto; border: 2px solid red;">';
					// topic	link	descript	date
		if(move_uploaded_file($temp2, $target_dir) == true){
			$sql = mysqli_query($conn, "
									INSERT INTO lectures(`topic`,`link`,`descript`,`date`) 
									VALUES('$filename','$flink','$descrip','$dat');
								");
			echo 'Your file have uploaded succefully <br> <a href="../lecturer.php">Click here to go Back</a>';
		}else{
			echo '<div class="alert alert-success alert-dismissible" role="alert" style="border-radius:3px; border-left:5px solid lightgreen;">
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  <strong>Information!</strong> Image file did not upload succefully.
				</div>';
		}

	}
	 //header('location : http://localhost/TutorialC++/admin.php');
?>
