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
  <h2 class="text-center" id="faqtitle">Tutorial Body</h2>
  <div class="row-">
  	<div class="col-md-10 col-md-offset-1">
    <!-- <?php //$classObj->gettutorDetail(); ?> -->

    <div class="panel panel-danger" style="border-radius: 0px; box-shadow: 0px 3px 0px 2px #327189,1px 3px 0px 2px #fff,5px 3px 0px 2px #327189">
    	
    	<div class="panel-body" style="color: #7f7f7f;">
    		<?php $classObj->gettutorDetail();?>

        </div>
    	</div>
    </div>
  </div>
  </div>
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
