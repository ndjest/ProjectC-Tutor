<?php 
	include 'multiuser.php';
	class tutor{
		public $conn,$row,$query,$datalookup,$db_select;

		public $faq_title, $q_ans,$u_email,$keytitle,$caption1,$caption2,$caption3,$caption4,$caption5,$captrand,$text1,$text2,$text3,$text4,$text5,$index1,$index2,$index3,$index4,$index5,$regno,$getpage,$captions,$index,$texts;

		function connection(){
			$this->conn = mysqli_connect('localhost', 'root', '');
			$this->db_select = mysqli_select_db($this->conn, 'tutorial');
			if(!$this->conn){
				echo "Connection to Database failed";
			}
			return $this->conn;
		}

		function addfaq(){
			if(isset($_POST['submit_faq'])){
				$this->faq_title = $_POST['faq_title'];
				$this->q_ans = $_POST['q_ans'];
				$this->u_email = "nill";
			if(!empty($this->faq_title) && !empty($this->q_ans)){
				$this->query = mysqli_query($this->conn, "
							INSERT INTO faq(`heading`,`content`,`u_email`) 
							VALUES('$this->faq_title','$this->q_ans','$this->u_email');
						");
			}else{
				echo '<div class="alert alert-success alert-dismissible" role="alert" style="border-radius:3px; border-left:5px solid lightgreen;">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Information!</strong> Carefully fill out all the fields.
		</div>';
			}
			}
		}
		//tutorial->t_id	keytitle	caption1	caption2	caption3	caption4	caption5	captrand

		//tutbody->b_id	text1	text2	text3	text4	text5	keytitle	index1	index2	index3	index4	index5
		function addtutorial(){
			if(isset($_POST['tut_submit'])){
				$this->keytitle	 = $_POST['keytitle'];

				$this->caption1	 = $_POST['heading1'];
				$this->caption2	 = $_POST['heading2'];
				$this->caption3	 = $_POST['heading3'];
				$this->caption4	 = $_POST['heading4'];
				$this->caption5	 = $_POST['heading5'];

				$this->text1	= $_POST['h1body'];
				$this->text2	= $_POST['h2body'];
				$this->text3	= $_POST['h3body'];
				$this->text4	= $_POST['h4body'];
				$this->text5	= $_POST['h5body'];

				$this->index1	= $_POST['index1'];
				$this->index2	= $_POST['index2'];
				$this->index3	= $_POST['index3'];
				$this->index4	= $_POST['index4'];
				$this->index5= $_POST['index5'];

				if (!empty($this->keytitle) && !empty($this->index1) && !empty($this->text1)) {																	
					$this->query = mysqli_query($this->conn,"
						INSERT INTO tutorial(`keytitle`,`caption1`,`caption2`,`caption3`,`caption4`,`caption5`,`text1`,`text2`,`text3`,`text4`,`text5`,`index1`,`index2`,`index3`,`index4`,`index5`) 
						VALUES('$this->keytitle','$this->caption1','$this->caption2','$this->caption3','$this->caption4','$this->caption5','$this->text1','$this->text2','$this->text3','$this->text4','$this->text5','$this->index1','$this->index2','$this->index3','$this->index4','$this->index5');
							");

					echo '<div class="alert alert-success alert-dismissible" role="alert" style="border-radius:3px; border-left:5px solid lightgreen;">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Information!</strong> Applictation submitted successfully.
		</div>';
				}else{
					echo '<div class="alert alert-info alert-dismissible" role="alert" style="border-radius:3px; border-left:5px solid lightblue;">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Information!</strong> Check to fill each form appriopratly.
		</div>';
				}
			}
		}

		function userReg(){
			if (isset($_POST['signup'])) {
				$this->fname = $_POST['fname'];
				$this->lname = $_POST['lname'];
				
				$this->regno = $_POST['regnum'];

				$this->email = $_POST['email'];
				$this->password = $_POST['password'];
				$this->con_password = $_POST['conf_pass'];
				$this->gender = $_POST['gender'];
				
				$this->role = $_POST['role'];
				$this->dept = $_POST['dept'];
				$this->date_reg = date("Y-m-d H:i:s");
				
				if ($this->password == $this->con_password) {											
					//fname	lname	gender	regno	password	u_email	role	date

					$this->query = mysqli_query($this->conn,"
						INSERT INTO users(`fname`,`lname`,`gender`,`regno`,`password`,`u_email`,`role`,`date`) VALUES('$this->fname','$this->lname','$this->gender','$this->regno','$this->password','$this->email','$this->role','$this->date_reg');

					");
					echo '<div class="alert alert-success alert-dismissible" role="alert" style="border-radius:3px; border-left:5px solid lightgreen;">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Information!</strong> Register successfully.
		</div>';

				}else{
					echo '<div class="alert alert-info alert-dismissible" role="alert" style="border-radius:3px; border-left:5px solid lightblue;">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Information!</strong> Password miss match.
		</div>';
				}
			}
		} //end of user registration function


		function userLogin(){
			if (isset($_POST['login'])) {
				if (!empty($_POST['email']) && !empty($_POST['password'])) {

					$this->get_username = mysqli_escape_string($this->conn, trim($_POST['email']));
					$this->get_password = mysqli_escape_string($this->conn, trim($_POST['password']));

					if ($this->query = mysqli_query($this->conn, "SELECT * FROM `users` WHERE `u_email` = '$this->get_username' OR `regno` = '$this->get_username' AND `password` = '$this->get_password'")) {
							$this->getpage = multiusers($this->conn, $this->get_username);

							if ($this->row = mysqli_fetch_assoc($this->query)) {
								if (mysqli_num_rows($this->query) == 1) {
								$cookieName = "user";
								$cookieValue = $this->row['u_email'];
								setcookie($cookieName, $cookieValue, time() + (86400 * 2), "/");

								header("location: ".$this->getpage);

 
							}else{
								echo "database error";
							}
						}else{
							echo '<div class="alert alert-danger">Incorrect Login Details</div>';
							$email = $_POST['email'];
							$pass = $_POST['password'];
						}
					}


				}else{
					echo '<div class="alert alert-info">Username & Password can\'t be empty.</div>';
				}
			}
			return $this->getpage;
		}
function studentDetail(){
	$username = $_COOKIE['user'];//$_COOKIE['user'];
	$sql = mysqli_query($this->conn, "SELECT * FROM `users` WHERE `users`.`u_email` = '$username' OR `regno` = '$username'");
	$this->row = mysqli_fetch_assoc($sql);

	echo '
		<p>Firstname:'.$this->row['fname'].'</p>
        <p>Lastname: '.$this->row['lname'].'</p>
        <p>Gender: '.$this->row['gender'].'</p>
        <p>Reg. Number: '.$this->row['regno'].'</p>
        <p>User Role:  '.$this->row['role'].'</p>         
	';
}
function getAssignment(){
	$sql = mysqli_query($this->conn, "SELECT * FROM lectures ORDER BY id DESC LIMIT 3");
	while ($this->row = mysqli_fetch_assoc($sql)) {
		echo '
		
	          			<p style="font-size:2em; font-weight:bold;">'.'Assignment on '.$this->row['topic'].'</p>
	          			<p style="text-align:justify">'.substr($this->row['descript'], 0,300).'...<br><span><a href="inc/'.$this->row['link'].'" download="true" class="btn btn-success btn-md" style="margin-top:2%;">Download file</a></span></p>
	          			<p><label class="label label-default">date posted:</label> '.$this->row['date'].'</p>
	          			<p><hr></p>
	';
	};
	
}
function frequentAks(){
	$this->query = mysqli_query($this->conn, "SELECT * FROM `faq` ORDER BY `t_id` ASC");
	while ($this->row = mysqli_fetch_assoc($this->query)){
		echo '
		<button class="accordion" id="format">'.$this->row['heading'].'</button>
			  	  <div class="panel1" id="fort">
		        <p>'.$this->row['content'].'</p>
		      </div>
		';
		}
}

function getProgram(){
	$this->query = mysqli_query($this->conn, "SELECT * FROM `faq` ORDER BY `t_id` ASC");
	while ($this->row = mysqli_fetch_assoc($this->query)){
		echo '
		<button class="accordion">'.$this->row['heading'].'</button>
			  	  <div class="panel1">
		        <p>'.$this->row['content'].'</p>
		      </div>
		';
		}
}


// t_id keytitle caption1 caption2 caption3 caption4 caption5
function tutorial(){
	$this->query = mysqli_query($this->conn, "SELECT * FROM tutorial ORDER BY t_id");
	while ($this->row = mysqli_fetch_assoc($this->query)){
		echo '
			<button class="accordion" id="format" style="border-bottom: 3px solid #fff;">'.$this->row['keytitle'].'</button>
	  	  	<div class="panel1" id="fort">
          	<div><a href="tutor.php?position='.$this->row["t_id"].'" style="color:#FFF;">'.$this->row['index1'].' '.$this->row['caption1'].'</a></div>
          	<div><a href="tutor.php?position='.$this->row["t_id"].'" style="color:#FFF;">'.$this->row['index2'].' '.$this->row['caption2'].'</a></div>
          	<div><a href="tutor.php?position='.$this->row["t_id"].'" style="color:#FFF;">'.$this->row['index3'].' '.$this->row['caption3'].'</a></div>
          	<div><a href="tutor.php?position='.$this->row["t_id"].'" style="color:#FFF;">'.$this->row['index4'].' '.$this->row['caption4'].'</a></div>
          	<div><a href="tutor.php?position='.$this->row["t_id"].'" style="color:#FFF;">'.$this->row['index5'].' '.$this->row['caption5'].'</a></div>
      		</div>
		';
		}
	
}

	function gettutorDetail(){
	 		$position = $_GET['position'];
			if (isset($_GET['position'])==true) {
			$this->query = mysqli_query($this->conn, "SELECT * FROM tutorial WHERE t_id = '$position'");
			$this->row = mysqli_fetch_assoc($this->query);
			$cap1 =  $this->row['caption1'];$cap2 = $this->row['caption2'];$cap3 = $this->row['caption3'];$cap4 = $this->row['caption4'];$cap5 = $this->row['caption5'];
			$index1 = $this->row['index1']; $index2 = $this->row['index2']; $index3 = $this->row['index3']; $index4 = $this->row['index4']; $index5 = $this->row['index5'];
			$txt1 = $this->row['text1'];$txt2 = $this->row['text2'];$txt3 = $this->row['text3'];$txt4 = $this->row['text1'];$txt5 = $this->row['text5']
;
			$this->captions =  array($cap1,$cap2,$cap3,$cap4,$cap5);

			$this->index = array($index1,$index2,$index3,$index4,$index5);

			$this->texts =  array($txt1,$txt2,$txt3,$txt4,$txt5);
			$colors = array('#360745','#360732','#362945','#160715','#360354');

			$count_capt = count($this->captions);
			echo '<h1 class="text-center" style="color: #360745; font-weight:2em;">'.$this->row['keytitle'].'</h1></div><hr>';
			for($i = 0; $i<$count_capt; $i++){
				echo '	
								<h6 style="color: #fff; font-weight:2em; font-size:2em; padding:3px; background-color:'.$colors[$i].'">'.$this->index[$i].' '.$this->captions[$i].'</h6>
								<p style="color: #360745; text-align:justify; padding:2%;">'.$this->texts[$i].'</p>.
					    	
						';
			}

			}

				

			
	}

	function getPrograms(){
		$sql = mysqli_query($this->conn, "SELECT * FROM program ORDER BY id");
			while($row = mysqli_fetch_assoc($sql)){

				echo '
			    <div class="col-md-3">
      <div class="panel panel-danger" style="border-radius: 0px; box-shadow: 0px 3px 0px 2px #327189,1px 3px 0px 2px #fff,5px 3px 0px 2px #327189">
        <div class="panel-heading" style="background: #230F2B; color: #fff;"><h3 class="text-default text-center">'.$row['title'].'</h3></div>
        <div class="body" style="width: 100%; margin: 0px; padding: 0px">

            <img src="inc/'.$row['img'].'" style="width: 100%;">

        </div>
        <div class="panel-footer text-center" style="background: #230F2B; color: #fff;">Click to view full <a href="viewprogram.php?position='.$row['id'].'" class="btn btn-info btn-sm">HERE</a></div>
      </div>
    </div>
		';
			}
	}

	function programBody(){
		$position = $_GET['position'];
		if(isset($_GET['position'])==true){
			$sql = mysqli_query($this->conn, "SELECT * FROM program WHERE id = '$position'");
			$row = mysqli_fetch_assoc($sql);

			echo '
				      <div class="panel-heading" style="background: #230F2B; color: #fff; border-radius: 0px;"><h3>'.$row['title'].'</h3></div>
      <div class="panel-body" style="min-height: 250px; padding: 0px; border-radius: 0px; margin: 0px;"> 
          <p>  <pre>
          <code> <textarea disabled="" style="min-width: 100%; resize: none; min-height: 450px; border: none; color:#f00;">
             '.$row['body'].'
          </textarea>
              
          </code>
           </pre>
          </p></div>
      <div class="panel-footer" style="background: #230F2B; color: #fff; border-radius: 0px; padding: 0px;"> 
          <h3 style="color: #fff; text-align: center;"> PROGRAM OUTPUT </h3>
          <img src="inc/'.$row['img'].'" style="width: 100%; min-height: 400px; margin: 0px;">
      </div>

			';
		}
	}









	} //end of tutor class
 ?>
