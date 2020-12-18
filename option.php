<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">
  <h2 class="text-center">Responsive Topnav Example</h2>
  <p class="text-center">Resize the browser window to see how it works.</p>

  <div class="row">
  	<div class="col-md-6 col-md-offset-3">
	  	<div class="col-md-6" id='tapme'><a href="" class="btn btn-lg btn-primary">FAQ</a></div>
	  	<div class="col-md-6" id='tapme'><a href="" class="btn btn-lg btn-primary">Tutorial</a></div>
	  	<div class="col-md-6" id='tapme'><a href="" class="btn btn-lg btn-primary">Program</a></div>
	  	<div class="col-md-6" id='tapme'><a href="" class="btn btn-lg btn-primary">Exam Questions</a></div>
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
</script>

</body>
</html>
