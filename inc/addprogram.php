<div class="row">
  	<div class="col-md-12">
  	  <div class="row">
  	  	<div>
  		<h2 class="text-center col-md-6 col-md-offset-3" style="color: #230F2B;">Add New Programs</h2>
  	</div>
  	  </div>
  	<form method="post" class="form-horizontal" action="inc/fileupload.php" enctype="multipart/form-data">
  		<div class="form-group">
  			<label for="title" class="control-label col-md-2">Program title:</label>
  			<div class="col-md-8">
  				<input class="form-control" type="text" name="title">
  			</div>
  		</div>
  		<div class="form-group">
  			<label for="title" class="control-label col-md-2">Program Code:</label>
  			<div class="col-md-8">
  				<textarea class="form-control" type="text" name="pbody" rows="10" style="resize: none; border: 2px solid #230F2B"></textarea>
  			</div>

  		</div>
  		<div class="col-md-12">
  		<h5 class="text-info text-center"><small>You are to upload an image of the output below..</small></h5>	
  		</div>
  		<div class="form-group">
  			<label for="title" class="control-label col-md-2">Program Output:</label>
  			<div class="col-md-8">
  				<input type="file" name="file1" class="form-control" style=" border: 2px solid #230F2B">
  			</div>
  		</div>

  		<div class="form-group">
  			<div class="col-md-8 text-center col-md-offset-2">
  				<button class="form-control btn btn-lg " style="background: #230F2B; height: 50px; color: #fff;" name="addprog">Submit</button>
  			</div>
  		</div>
  	</form>
  		
  	</div>
  </div>