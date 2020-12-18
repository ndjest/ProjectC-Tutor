<?php 
      require 'inc/script.php';
      $classObj = new tutor;
      $classObj->connection();
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<?php include 'inc/header.php'; ?>

<div style="padding: 16px; margin-top: 4%;"> 
 <h2 class="text-center" id="faqtitle">Tutorials</h2>
  <div class="row">
  	<div class="col-md-10 col-md-offset-1">
    <?php $classObj->tutorial(); ?>
  </div>
  
</div>











<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
// =======================accordion==============================
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</body>
</html>
