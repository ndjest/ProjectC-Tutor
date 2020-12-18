<?php 
  require 'accounts/check.php';
    require 'inc/script.php';
  $classObj = new tutor;
  $classObj->connection();

   $getp = $classObj->userLogin();
 ?>
<html>
<head>
  <title>C++ Tutorial</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>

  <?php include "inc/header.php"; ?>
    <div class="container" style="margin-top: 6%;">
      <div class="row">
        <div class="pane panel-default">
          <div class="panel-heading text-center" style="color: #fff; border-bottom: 5px solid #230F2B; background: #230F2B;"><h2 class="">Welcome | <?php echo $_COOKIE['user']; ?></h2></div>
          <div class="panel-body">
          	<div class="row">
          		<div class="col-md-6">
            		<fieldset>
                    <legend>Current Lecture Note &amp Assignment </legend>
                    <?php $classObj->getAssignment(); ?>
                </fieldset>
          		</div>
          		<div class="col-md-6">

              <fieldset>
                <legend>Student Info</legend>
                  <?php   $classObj->studentDetail();  ?>
                    <p>Department: Computer Science</p><br> <br>
                    <p><a href="accounts/logout.php" class="btn btn-danger btn-sm">LOGOUT</a></p>
              </fieldset>
          			
          		</div>
          	</div>
          </div>

        </div>
      </div>
</div>
</body>
</html>
