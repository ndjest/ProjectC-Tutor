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

<div style="padding: 16px; margin-top: 5%;">
  <div class="row-">
  	<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-info" style="border-radius: 0px; border: 3px solid #230F2B;">
    <?php $classObj->programBody() ?>
    </div>
    </div>
  </div>
  </div>
  </div>
</div>
<!-- Microsoft Visual Studio Enterprise -->