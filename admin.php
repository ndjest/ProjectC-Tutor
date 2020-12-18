<?php 
	require 'inc/script.php';
  require 'accounts/check.php';
	$classObj = new tutor;
	$classObj->connection();
    $classObj->addtutorial();
    $classObj->addfaq();

 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!-- <link rel="stylesheet" type="text/css" href="css/styles.css"> -->

<style>

body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}
input[type="text"], input[type="number"], input[type="phone"]{
      background: transparent;
      border: 2px solid #230F2B; 
      height: 50px;
      color: #da0F2B;
      font-size: 1.3em;
}
/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #230F2B;
    color: #fff;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
input[type="button"], input[type="email"], input[type="password"]{
    background: transparent;
    border: 2px solid #230F2B; 
    height: 50px;
    color: #7a7a7a;
    font-size: 1.3em;
  }#reg_input * input{color: #7a7a7a; }
</style>
</head>
<body>
<div class="tab" style="border-bottom: 5px solid #230F2B;">
  <button class="tablinks" onclick="openClass(event, 'addprogram')" id="defaultOpen">Add Programs</button>
  <button class="tablinks" onclick="openClass(event, 'addtutorial')">Add Tutorial</button>
  <button class="tablinks" onclick="openClass(event, 'faqadmin')">Frequent Question</button>
  <button class="tablinks" onclick="openClass(event, 'userreg')">Register User</button>
  <button class="tablinks">WELCOME | <?php echo $_COOKIE['user']; ?></button>
  <a href="accounts/logout.php" style="text-decoration: none;" style="width: 100%; height: inherit;"><button class="tablinks" style="background: #3f3571; color: #fff;">Logout</button></a>
</div>

<div id="addprogram" class="tabcontent">
  <?php include 'inc/addprogram.php'; ?>																						
</div> <!-- end of id london( Add program) -->

<div id="addtutorial" class="tabcontent">
  <?php include 'inc/addtutorial.php'; ?>
</div> <!-- end of id Paris( Add Tutorial) -->

<div id="faqadmin" class="tabcontent">
  <?php include 'inc/faqadmin.php'; ?>
</div> <!-- end of id Tokyo( Frequently Asked questions) -->

<div id="userreg" class="tabcontent">
  <?php include 'userreg.php'; ?>
</div> <!-- end of id Paris( Add Tutorial) -->


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

function openClass(evt, className) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(className).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
