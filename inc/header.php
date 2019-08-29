<?php
session_start();
include 'inc/functions.php';
$current_pg = $_SERVER['REQUEST_URI'];

// set page title
if ($current_pg == '/fadis/' || $current_pg == '/fadis/index.php') {
	$pg_title  = 'FinTech Access Derivatives & Inclusion Services (FADIS) Limited';
}elseif ($current_pg == '/fadis/contact.php') {
	$pg_title  = 'Contact Us';
}elseif ($current_pg == '/fadis/register.php') {
	$pg_title  = 'Join Fadis';
}elseif ($current_pg == '/fadis/about.php') {
	$pg_title  = 'About Us';
}elseif ($current_pg == '/fadis/project.php') {
	$pg_title  = 'Our Projects';
}else{
	$pg_title  = 'Error 404';
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- display page title -->
	<title><?php echo $pg_title; ?></title>

	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> 

	<!-- animate.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

	<?php if ($current_pg != '/fadis/') { ?>
	<!-- stylesheet for only other pages except home page-->
	<!-- <link rel="stylesheet" href="assets/css/main.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <?php } ?>

    <!-- stylesheet for only all pages -->
	<link rel="stylesheet" type="text/css" href="assets/css/style2.css">

	<!-- font awesome -->
	<link rel="stylesheet" href="assets/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- google fonts -->
	<link href="assets/css/fonts.css"rel="stylesheet">

    <!-- site icon -->
    <link rel="icon" type="text/css" href="assets/fadis_ico.png">
</head>
<body>
	<main class="">
		<!-- header -->
		<header class="header ">
			<nav class="navbar navbar-expand-lg navbar-light bg-light js-mega-menu hs-menu-initialized hs-menu-horizontal">
				<!-- logo -->
			    <a class="navbar-brand" href="/fadis">
			        <img src="assets/fadis-logo.png" style="width: 145px; height: 40px;" class="d-inline-block align-top" alt="">
			    </a>
			    <!-- end logo -->

			    <!-- toggle button -->
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <!-- end toggle button -->

			    <!-- navigation -->
			    <div class="collapse navbar-collapse align-items-center flex-sm-row" id="navbarTogglerDemo02" style="">
			    	<ul class="navbar-nav text-uppercase ml-auto" style="margin-right: 40px;">
			    	    <li class="">
			    	        <a class="nav-link <?php echo active($current_pg, '');?>" href="/fadis">Home</a>
			    	    </li>
			    	    <li class="nav-item">
			    	        <a href="about.php" class="nav-link <?php echo active($current_pg, 'about.php');?>">About</a>
			    	    </li>
			    	    <!-- <ul class="drop-d" id="drop-d-1">
			    	    	<li>About</li>
			    	    	<li>Team</li>
			    	    	<li>What we do</li>
			    	    	<li>Patners</li>
			    	    </ul> -->
			    	    <li class="nav-item">
			    	        <a href="project.php" class="nav-link <?php echo active($current_pg, 'project.php');?>">Project</a>
			    	    </li>
			    	    <li class="nav-item">
			    	        <a href="contact.php" class="nav-link <?php echo active($current_pg, 'contact.php');?>">Contact</a>
			    	    </li>
			    	</ul>
			        <div class="d-inline-block g-hidden-md-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
			    	    <a href="register.php" class="btn btn-outline-success g-font-size-13 text-uppercase g-py-10 g-px-15">Register</a>
			        </div>
			    </div>
			    <!-- end navigation -->

			</nav>
		</header>
		<!-- end header -->

		<!-- page content -->
    	<div class="content">
    		<?php if ($current_pg != '/fadis/' && $current_pg != '/fadis/index.php' && $current_pg != '/fadis/register2.php') { ?>
    		<div class="header-title Container-fluid">
                <div class="col-12" style="padding: 100px 40px;">
                    <h3 style="color: #eee; letter-spacing: 2px;word-spacing: 5px;line-height: 30px;">
                    	<?php if ($current_pg == '/fadis/about.php') {
                    	    echo 'Discover more about us.';
                    	}elseif ($current_pg == '/fadis/contact.php' || $current_pg == '/fadis/contact2.php') {
                    		echo 'It is good to meet you.';
                    	}elseif ($current_pg == '/fadis/project.php') {
                    		echo 'Our Projects';
                    	}elseif ($current_pg == '/fadis/register.php') {
                    		echo 'Become  FADIS member';
                    	}
                    	?>
                    	
                    </h3>
                    <?php if ($current_pg == '/fadis/about.php') { ?>
                        <p style="font-size: 18px;color:#fff;">FinTech Access Derivatives & Inclusion Services (FADIS) Nigeria Limited</p>
                    <?php }
                    elseif ($current_pg == '/fadis/contact.php' || $current_pg == '/fadis/contact2.php') {?>
                    	<h2 class="text-uppercase" style="font-weight: 700;letter-spacing: 2px;font-size: 50px;color: #fff;">Got a question?</h2>
                    <?php } ?>
                </div>
                <!-- <div class="arrow-down section-icon animated bounce slower infinite">
                    <i class="fa fa-sort-down" style="font-size: 25px;margin-top: -2px;color: #72c02d;"></i>
                </div> -->
            </div>
    			
    		<?php } ?>