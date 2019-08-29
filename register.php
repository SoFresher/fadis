<?php include 'inc/header.php';?>
<section class="container" style="padding: 100px 10px 100px;">
	<div class="row">
		<div class="col-md-5">
			<div  class="" style="padding-top: 3.57143rem;padding-bottom: 3.57143rem;padding-left: 2.14286rem;padding-right: 2.14286rem;border: solid 1px #ddd; border-radius: 3px">
				<header>
					<div class="text-align-center" style="margin-bottom: 16px;">
						<h1 class="h4">Sign up once and become 'FADIS' Ambassador</h1>
					</div>
				</header>
				<?php if (isset($_SESSION['suc_msg'])) { ?>
				    <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
						<?php foreach ($_SESSION['suc_msg'] as $msg) {
							echo "<li>".$msg."</li>";
							// print_r($msg);
						} ?>

				       	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						</button>
				    </div>
				<?php unset($_SESSION['suc_msg']);} ?>

				<?php if (isset($_SESSION['err_msg'])) { ?>
				    <div class="alert alert-warning alert-dismissible fade show col-12" role="alert">
				       	<strong>Error!:</strong>
				      	<?php foreach ($_SESSION['err_msg'] as $msg) {
				      		echo "<li>".$msg."</li>";
				       		// print_r($msg);
				       	} ?>
				       	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				   		    <span aria-hidden="true">&times;</span>
				   		</button>
				    </div>
				<?php unset($_SESSION['err_msg']);} ?>

				<form class="" method="post" action="processes/register.php" enctype="multipart/form-data">
					<div class="col-12 form-group no-padding">
						<div class="row">
					        <div class="col-md-6 col-12 cols-sm-12">
						        <label for="name" class="cols-sm-2 control-label">Surname<span class="required">*</span></label>
							    <div class="cols-sm-10">
								    <div class="input-group">
									    <span class="input-group-addon"><i class="fa fa-user-circle fa" aria-hidden="true"></i></span>
									    <input type="text" class="form-control" name="s_name" id="s_name"  placeholder="Surname" value="<?php echo echo_if_exists('s_name'); ?>" />
								    </div>
							    </div>
						    </div>
						    <div class="col-md-6 col-12 cols-sm-12">
							    <label for="name" class="cols-sm-2 control-label">First Name<span class="required">*</span></label>
							    <div class="cols-sm-10">
							        <div class="input-group">
								        <span class="input-group-addon"><i class="fa fa-user-circle fa" aria-hidden="true"></i></span>
								        <input type="text" class="form-control" name="f_name" id="f_name"  placeholder="First name" value="<?php echo echo_if_exists('f_name'); ?>" />
							        </div>
							    </div>
							</div>
						</div>
					</div>

					<div class="col-12 form-group no-padding">
						<div class="row">
							<div class="col-md-6 col-12 cols-sm-12">
						        <label for="name" class="cols-sm-2 control-label">Middle Name</label>
						        <div class="cols-sm-10">
							        <div class="input-group">
								        <span class="input-group-addon"><i class="fa fa-user-circle fa" aria-hidden="true"></i></span>
								        <input type="text" class="form-control" name="m_name" id="m_name"  placeholder="Other names" value="<?php echo echo_if_exists('m_name'); ?>" />
							        </div>
						        </div>
					        </div>

					        <div class="col-md-6 col-12 cols-sm-12">
						        <label for="name" class="cols-sm-2 control-label">Phone Number<span class="required">*</span></label>
						        <div class="cols-sm-10">
							        <div class="input-group">
								        <span class="input-group-addon"><i class="fa fa-mobile-alt fa" aria-hidden="true"></i></span>
								        <input type="text" class="form-control" name="phone" id="phone"  placeholder="Phone" value="<?php echo echo_if_exists('phone'); ?>"/>
							        </div>
						        </div>
					        </div>
						</div>
					</div>

					<div class="col-12 form-group no-padding">
						<div class="row">
							<div class="col-md-6 col-12 cols-sm-12">
						        <label for="name" class="cols-sm-2 control-label">Email<span class="required">*</span></label>
						        <div class="cols-sm-10">
							        <div class="input-group">
								        <span class="input-group-addon"><i class="fa fa-envelope-open fa" aria-hidden="true"></i></span>
								        <input type="email" class="form-control" name="email" id="email"  placeholder="Email" value="<?php echo echo_if_exists('email'); ?>"/>
							        </div>
						        </div>
					        </div>

					        <div class="col-md-6 col-12 cols-sm-12">
						        <label for="name" class="cols-sm-2 control-label">Date of Birth</label>
						        <div class="cols-sm-10">
							        <div class="input-group">
								        <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
								        <input type="date" class="form-control" name="dob" id="dob"  placeholder="Date of Birth" value="<?php echo echo_if_exists('dob'); ?>"/>
							        </div>
						        </div>
					        </div>
						</div>
					</div>

					<div class="col-12 form-group no-padding">
						<label for="name" class="cols-sm-2 control-label">Upload Degree Certificate<span class="required">*</span></label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="deg_cert">
							<label class="custom-file-label" for="customFile">Choose file</label>
						</div>
					</div>

					<div class="col-12 form-group no-padding">
						<label for="name" class="cols-sm-2 control-label">Upload Passport</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="customFile" name="pass_p">
							<label class="custom-file-label" for="customFile" >Choose file</label>
						</div>
					</div>
				            
				    <div class="col-12 form-group no-padding">
				       	<label class="cols-sm-2 control-label">Complete NYSC?<span class="required">*</span></label><br>
					    <div class="custom-control custom-radio custom-control-inline">
				            <input type="radio" id="customRadioInline1" name="nysc" class="nysc-yes custom-control-input" value="yes">
				            <label class="custom-control-label" for="customRadioInline1">Yes</label>
				        </div>
				    <div class="custom-control custom-radio custom-control-inline">
				        <input type="radio" id="customRadioInline2" name="nysc" class="custom-control-input nysc-no" value="no">
				        <label class="custom-control-label" for="customRadioInline2">No</label>
				    </div>
				</div>
	            <div class="form-group col-12 no-padding" id="up-nysc">
					<label for="name" class="cols-sm-2 control-label">Upload NYSC Certificate<span class="required">*</span></label>
					<div class="custom-file">
    					<input type="file" class="custom-file-input" id="customFile" name="nysc_cert">
	    				<label class="custom-file-label" for="customFile">Choose file</label>
					</div>
				</div>
				<div class="col-12 form-group no-padding">
					<div class="custom-control custom-checkbox my-1 mr-sm-2">
	                    <input type="checkbox" name="terms" class="custom-control-input" id="customControlInline">
	                    <label class="custom-control-label" for="customControlInline">I hereby agree to the terms and conditions required to become 'FADIS' Ambassador</label>
	                </div>
				</div>

			    <div class="form-group cols-12 ">
				    <div class="row" style="padding-right: 15px;padding-left: 15px; ">
					    <div class="col-md-4 cols-12 cols-sm-12 no-padding">
					        <input type="reset" name="reset" class="btn btn-danger btn-block" value="Reset">
					    </div>
					    <div class="col-md-4 cols-12 cols-sm-12 offset-md-4 no-padding">
					        <input type="submit" name="reg" class="btn btn-success btn-block" value="Register">
					    </div>
					</div>
				</div>
			</form>
				
			</div>
		</div>
		<div class="col-md-7">
			<div style="padding-right: 15px;">
				<div style="margin-bottom: 3rem">
					<h2 style="font-weight: 300;margin-bottom: 1rem;line-height: 1.4;"> Welcome to FADIS</h2>
					<p>The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels.</p>
				</div>
				<div class="text-align-center">
					<h2 class="h4" style="margin-bottom: 1.5rem;">Join more than <span class="text-success">10,000</span> members worldwide</h2>
					<img src="assets/map1.png" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- join fadis -->
<section class="join" style="margin-top: 100px;">
    <div class="container overlay-inner">
        <div class="row">
            <div class="col-md-10" style="text-align: left; align-self: center !important;font-weight: 700;">
                <p class="no-margin" style=" color: #fff !important;">"Become a FADIS Ambassador" and Earn BIG rewards</p>
            </div>
            <div class="col-md-2">
                <a href="http://www.fadisportal.net" class="btn btn-outline-info text-uppercase">Join FADIS</a>
            </div>
        </div>
    </div>
</section>
<!-- end join fadis -->
<?php include 'inc/footer.php';?>