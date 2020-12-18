 <?php 
  require 'inc/script.php';
  $classObj = new tutor;
  $classObj->connection();

   $getp = $classObj->userLogin();

   if (isset($_COOKIE['user'])){
      header("location: ".$getp);
  }
?>
<html>
<head>
  <title>C++ Tutorial</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>

  <?php include 'inc/header.php'; ?>

<div class="row content"  style="padding: 16px; margin-top: 4%;">
  <div class="container-fluid" id="process" style="background: #230F2B">
    <div class="col-md-12" id="info">
      <!-- <h1 class="text-center">LOGIN PAGE</h1> -->
      
      <form method="POST" class="form-horizontal">
      <div class="col-md-8 col-md-offset-2" id="login_cont" style="border-top: 4px solid #da0F2B;border-bottom: 4px solid #da0F2B">
      <?php //echo $info; ?>
      <h1 class="text-center" style="text-shadow: 3px 2px #da0F2B; color: #f4f4f4">LOGIN PAGE</h1>
        <?php $classObj->userLogin(); ?>
        <div class="form-group">
              <div class="col-md-12">
                <input type="text" name="email" class="form-control" placeholder="Enter email address or registration number here" autocomplete="0" required style="border: 2px solid #da0F2B;">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <input type="password" name="password" class="form-control" placeholder="Enter your password here" autocomplete="0" required style="border: 2px solid #da0F2B;">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12">
                <button class="btn btn-lg btn-danger form-control send" name="login" style="border: 2px solid #da0F2B; ">Login Now !</button>
              </div>
            </div>
      </div>
      </form>
    </div>
  </div>

</div>
</body>
</html>
