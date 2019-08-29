<?php include 'inc/header.php';?>
<section>
	<div class="row" style="padding-top: 4.28571rem;padding-bottom: 4.28571rem;margin-left: 0;margin-right: 0;border-bottom: 1px solid #eee;">
		<div class="col-md-4">
			<div class="text-align-center">
				<span style="margin-bottom: 8px">
					<i class="fa fa-map-marked-alt" style="font-size: 50px;margin-bottom: 15px"></i>
				</span>
				<h4>Address</h4>
				<p>152 Obafemi Awolowo Way, Ikeja, Lagos</p>
			</div>
		</div>
		<div class="col-md-4 border-left">
			<div class="text-align-center">
				<span style="margin-bottom: 8px">
					<i class="fa fa-mobile-alt" style="font-size: 50px;margin-bottom: 15px"></i>
				</span>
				<h4>Phone Number</h4>
				<p>+234-805-120-0000</p>
			</div>
		</div>
		<div class="col-md-4 border-left">
			<div class="text-align-center">
				<span style="margin-bottom: 8px">
					<i class="fa fa-envelope-open-text" style="font-size: 50px;margin-bottom: 15px"></i>
				</span>
				<h4>Email</h4>
				<p>info@fadis.ng</p>
			</div>
		</div>
	</div>
</section>
<section class="container" style="padding: 100px 10px 100px;">
	<div class="row justify-content-center" style="margin-bottom: 70px;">
		<div class="col-md-7">
			<div class="text-align-center">
				<h2 class="text-uppercase" style="font-weight: 700; letter-spacing: 5px;word-spacing: 1px;">Let us meet you</h2>
				<div class="gr-thread" style="margin-left: auto;margin-right: auto;"></div>
				<p>Would you like to speak to one of our financial advisers over the phone? Just submit your details and we’ll be in touch shortly. You can also email us if you would prefer.</p>
			</div>
		</div>
	</div>

	<div class="row justify-content-center">
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
		<?php
		    unset($_SESSION['suc_msg']);
		    } 
		?>
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
		<?php
		    unset($_SESSION['err_msg']);
		    } 
		?>
		<div class="col-md-9">
			<form action="processes/contact.php" method="post">
				<div class="row form-group">
				    <div class="col-12 col-md col-sm">
				        <div class="">
				            <input type="text" name="name" placeholder="Name" class="form-control" style="border-radius: 3px;padding-top: 10px; padding-bottom: 10px;" value="<?php echo echo_if_exists('name'); ?>">
				        </div>
			        </div>
			        <div class="col-12 col-md col-sm">
				        <div class="">
				        	<input type="text" name="phone" placeholder="Phone" class="form-control" style="border-radius: 3px;padding-top: 10px; padding-bottom: 10px;" value="<?php echo echo_if_exists('phone'); ?>">
					    </div>
				    </div>
				    <div class="col-12 col-md col-sm">
				        <div class="">
				            <input type="email" name="email" placeholder="Email" class="form-control" style="border-radius: 3px;padding-top: 10px; padding-bottom: 10px;" value="<?php echo echo_if_exists('email'); ?>">
				        </div>
			        </div>
			    </div>
		        <div class="row form-group">
    		        <div class="col-md-12">
	    	            <div class="">
			                <textarea class="form-control" style="" placeholder="Message" name="msg" rows="7" style="border-radius: 3px;"><?php echo echo_if_exists('msg'); ?></textarea>
			            </div>
		            </div>
		        </div>
		        <div class="row justify-content-center">
			        <div class="col-md-3">
			            <input type="submit" name="send" value="Send" class="btn btn-success btn-block" style="border-radius: 50px;">
			        </div>
		        </div>
		    </form>	        
		</div>
	</div>
</section>
<div class="Container map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3283489776377!2d3.3459163143157453!3d6.6060581952227455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b922d93a28a11%3A0x85cad48665066a91!2s152+Obafemi+Awolowo+Way%2C+Allen%2C+Ikeja!5e0!3m2!1sen!2sng!4v1527165175553" height="350" frameborder="0" style="width: 100%; border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
</div>
<?php include 'inc/footer.php';?>