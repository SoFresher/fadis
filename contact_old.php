<?php include 'inc/header.php';?>
    <div class="container" style="padding: 30px 30px 100px;">
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
        <style type="">
        	.contact-box input[type=text], .contact-box input[type=email], textarea{
        		border:none !Important;
        		background-color: transparent !Important;
        		padding-top: 0px !Important;
        		padding-bottom: 0px !Important;
            }
        	.contact-box input[type=text]:focus, .contact-box input[type=email]:focus, textarea:focus {
        		color: #fff !Important;
        		outline: none !Important;
        	    background-color: transparent !Important;
        	    box-shadow: none !Important;
        	    border: none !Important;
        	}
            .contact-box .inp{
        	    color: #fff;
        	    border: 2px #fff solid;
                padding: 10px;
            }
        </style>
        <div class="row">
            <div class="contact-box col-md-8 col-12 justify-content-between text-default" style="text-align: center; margin-bottom: 5px;">
    		    <h3>Get in touch</h3>
    	        <form action="processes/contact.php" method="post">
    		        <div class="row form-group">
                        <div class="col-12 col-md col-sm">
    				        <div class="input-group inp">
    				            <span>
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                </span>
    				            <input type="text" name="name" placeholder="Your Name" class="form-control" required>
    				        </div>
    			        </div>
    			        <div class="col-12 col-md col-sm">
    				        <div class="input-group inp">
    				            <span>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </span>
    				            <input type="text" name="phone" placeholder="Your Phone Number" class="form-control" required>
    				        </div>
    			        </div>
    			        <div class="col-12 col-md col-sm">
    				        <div class="input-group inp">
    				            <span>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
    				            <input type="email" name="email" placeholder="Your Email" class="form-control" required>
    				        </div>
    			        </div>
    		        </div>

    		        <div class="row form-group">
    			        <div class="col-md-12">
    			            <div class="input-group inp">
    				            <span>
                                    <i class="fas fa-comment prefix"></i>
                                </span>
    			                <textarea class="form-control" style="height: 100px; color: #fff; margin: 0;" placeholder="Your Message" name="msg" required></textarea>
    			            </div>
    		            </div>
    		        </div>

    		        <div class="row">
    			        <div class="col-md-4 offset-md-8">
    			            <input type="submit" name="send" value="Send" class="btn btn-info btn-block">
    			        </div>
    		        </div>
    	        </form>
            </div>

            <div class="col-md-4 col-12">
    	        <div class="row">
    	            <div class="col-md-12 contact-details no-margin">
    		            <h4>Contact details</h4>
    		            <ul class="no-padding">
    		                <li id="fst">
    				            <span class="icon">
    					            <i class="fas fa-map-marker-alt icon"></i>
    				            </span>
    				            <span class="text">
    					            152 Obafemi Awolowo Way,<br>Ikeja, Lagos
    				            </span>
    			            </li>
    			            <li>
    			    	        <span class="icon">
    			    		        <i class="fa fa-phone icon"></i>
    			    	        </span>
    			    	        <span class="text">
    			    		        +234-805-120-0000
    			    	        </span>
    			            </li>
    			            <li>
    				            <span class="icon">
    					            <i class="fas fa-envelope icon"></i>
    				            </span>
    				            <span class="text">
    					            info@fadis.ng
    				            </span>
    			            </li>
    		            </ul>
    		            <ul class="social">
    			            <li>
    				            <!-- <a href=""> -->
    					           <i class="fab fa-facebook-f"></i>
    				            <!-- </a> -->
    			            </li>
    			            <li>
    				            <!-- <a href=""> -->
    					            <i class="fab fa-twitter" style="margin-left: 8px;"></i>
    				            <!-- </a> -->
    			            </li>
    			            <li>
    				            <!-- <a href=""> -->
    					            <i class="fab fa-linkedin" style="margin-left: 9px;"></i>
    				            <!-- </a> -->
    			            </li>
    			            <li>
    				            <!-- <a href=""> -->
    					            <i class="fab fa-google-plus" style="margin-left: 8px;"></i>
    				            <!-- </a> -->
    			            </li>
    		            </ul>
    	            </div>
    	        </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col-md-12" style="padding-left: 20px">
                        <h4>Your Contact</h4>
                        <div class="yellow-border" style="margin: 0;">
                        </div>
                        <div class="row" style="padding-top: 25px;">
                            <div class="col-12 col-md-4">
                                <img src="assets/dr-duro.jpeg">
                            </div>
                            <div class="col-12 col-md-8">
                                <p>
                                    <strong>Dr Kaeem Durodoye</strong>
                                </p>
                                <p>Head of communications</p>
                                <div class="stm_contact_row">
                                    Email:&nbsp;
                                    <a href="mailto:info@fadis.ng">info@fadis.ng</a>
                                </div>
                                <div class="stm_contact_row">
                                    Skype:&nbsp;
                                    <a href="skype:kkd.fadis">kkd.fadis</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="Container map-section">
    	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3283489776377!2d3.3459163143157453!3d6.6060581952227455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b922d93a28a11%3A0x85cad48665066a91!2s152+Obafemi+Awolowo+Way%2C+Allen%2C+Ikeja!5e0!3m2!1sen!2sng!4v1527165175553" height="250" frameborder="0" style="width: 100%; border: 0px; pointer-events: none; margin-top: 20px;" allowfullscreen=""></iframe>
        </div>

        <!-- join fadis -->
        <section class="join" style="margin-top: 100px;">
            <div class="container overlay-inner">
                <div class="row">
                    <div class="col-md-10" style="text-align: left; align-self: center !important;font-weight: 700;">
                        <p class="no-margin" style=" color: #fff !important;">"Become a FADIS Ambassador" and Earn BIG rewards</p>
                    </div>
                    <div class="col-md-2">
                        <a href="" class="btn btn-outline-info text-uppercase">Join FADIS</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end join fadis -->
    </div>
<?php include 'inc/footer.php';?>