<div class="col-md-12" id="info" style="margin-top: 3%;">
			<!-- <h1 class="text-center">LOGIN PAGE</h1> -->
			
			<form method="post" class="form-horizontal">
			<div class="col-md-8 col-md-offset-2" id="login_cont">
				<div class="panel  panel-danger" style="padding: 10px; border: 2px solid #230F2B;">
				<?php $classObj->userReg(); ?>
					<div class="panel-heading" style="background-color: #230F2B;">
						<h1 class="text-center" style="color: #fff;">Register User</h1>
					</div>
					<div class="panel-body" style="color: #230F2B;">
					<div class="form-group">
								<select class="form-control opts" name="role" id="rolehide" style="border: 2px solid #230F2B; height: 50px;">
									<option value="">Select user role</option>
									<option value="student">Student</option>
									<option value="lecturer">Lecturer</option>
								</select>
						</div>
						<div class="form-group">
								<input type="text" name="fname" class="form-control opts" value="<?php //echo $f_name; ?>" placeholder="Enter firstname here" autocomplete="0" required>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<input type="text" name="lname" class="form-control opts" value="<?php //echo $l_name; ?>" placeholder="Enter lastname here " autocomplete="0" required>
								</div>
								<div class="col-md-6">
									<input type="text" name="othname" class="form-control opts" value="<?php //echo $l_name; ?>" placeholder="Enter othername here " autocomplete="0" required>
								</div>
							</div>
						</div>
						<div class="form-group">
								<input type="text" name="regnum" class="form-control opts " id="reg" value="<?php //echo $f_name; ?>" placeholder="Enter Registration number here" autocomplete="0" required>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6">
									<select class="form-control opts" name="gender" style="height: 50px; border: 2px solid #230F2B;">
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
								<div class="col-md-6">
									<select class="form-control opts" name="dept" style="border: 2px solid #230F2B;height: 50px;">
										<option value="">Select department</option>
										<option value="cs">Computer Sci</option>
										<option value="ms">Maths and Statistics</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
								<input type="email" name="email" class="form-control" value=" <?php //echo $email; ?>" placeholder="Enter email address here " autocomplete="0" required>
						</div>
						<div class="row">
							<div class="form-group">
							<div class="col-md-6">
									<input type="password" name="password" class="form-control" value="<?php //echo $pass; ?>" placeholder="Enter your password here " autocomplete="0" required>
							</div>
							<div class="col-md-6">
									<input type="password" name="conf_pass" class="form-control" value="<?php //echo $pass; ?>" placeholder="Enter your password here " autocomplete="0" required>
							</div>
							</div>
						</div>
						<div class="footer">
							<div class="form-group">
								<button class="btn btn-lg btn-danger form-control send" name="signup" style="background: #230F2B; height: 50px; color: #fff;">Signup</button>
							</div>
						</div>
					</div> <!-- end of panel-body -->	
				</div>
			</div>
			</form>
		</div>