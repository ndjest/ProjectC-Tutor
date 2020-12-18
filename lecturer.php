<?php 
  require 'accounts/check.php';
 ?>
  <html>
  <head>
    <title>C++ Tutorial</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">    
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>

  <?php include 'inc/header1.php'; ?>
      <div class="container" style="padding: 16px; margin-top: 4%;">
        <div class="row" style="">
          <div class="pane panel-warning">
            <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div>
            <h2 class="text-center text-danger col-md-6 col-md-offset-3">Upload Lecture File</h2>
          </div>
            </div>
          <form method="post" class="form-horizontal" action="inc/lecturefiles.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="title" class="control-label col-md-2">Topic:</label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="topic">
              </div>
            </div>
            <div class="form-group">
              <label for="title" class="control-label col-md-2">Description:</label>
              <div class="col-md-8">
                <textarea class="form-control" type="text" name="descript" rows="10" style="resize: none; border: 2px solid #da0F2B; "></textarea>
              </div>

            </div>
            <div class="col-md-12">
            <h5 class="text-info text-center"><small>You are to upload an pdf </small></h5>  
            </div>
            <div class="form-group">
              <label for="title" class="control-label col-md-2">Pdf File:</label>
              <div class="col-md-8">
                <input type="file" name="file2" class="form-control" style="border: 2px solid #da0F2B; ">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8 text-center col-md-offset-2">
                <button class="form-control btn btn-lg btn-danger" name="addfile" style="height: 50px;">Submit</button>
              </div>
            </div>
          </form>
            
          </div>
        </div>
          </div>
        </div>
  </div>
  </body>
  </html>
