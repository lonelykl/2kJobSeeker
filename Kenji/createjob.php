<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jinjang Utara Community</title>
	

	
  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	
</head>

<?php
$sessionInfoCond = '';
if (isset($_REQUEST["userID"])) {
    $Session_UserID = $_REQUEST["userID"];
    $Session_UserType = $_REQUEST["userType"];
    $sessionInfoCond = "?userID=$Session_UserID&userType=$Session_UserType";
}else{  
    $Session_UserID = '';
    $Session_UserType = '';
}
?>	
<body>
		
	
<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2" style = "width: 20%; text-align: center;">
					<div id="fh5co-logo">
<?php echo '<a href="mainpage.php'.$sessionInfoCond.'">';?>Jinjang Utara Community</a>
</div>
				</div>
				<div class="col-xs-10 text-right menu-1" style = "width: 80%;">
					
<ul>
						
<li><?php echo '<a href="mainpage.php'.$sessionInfoCond.'">';?>Home</a></li>
						
<li><?php echo '<a href="about.php'.$sessionInfoCond.'">';?>About</a></li>
						
<li><?php echo '<a href="service.php'.$sessionInfoCond.'">';?>Services</a></li>
						
<li><?php echo '<a href="work.php'.$sessionInfoCond.'">';?>Donation</a></li>
						
<li><?php echo '<a href="contact.php'.$sessionInfoCond.'">';?>Contact</a></li>
						
<?php 
if ($Session_UserID != ''){
?>
						
<li><?php echo '<a href="updateinfo.php'.$sessionInfoCond.'">';?>Update Info</a></li>			
<li><?php echo '<a href="search.php'.$sessionInfoCond.'">';?>Search</a></li>
<li><?php echo '<a href="listhistory.php'.$sessionInfoCond.'">';?>List Job</a><li>

<?php
}
?>						
<?php 
if ($Session_UserType == 'client' ||$Session_UserType == 'Client'){						
?>
<li class="active"><?php echo '<a href="createjob.php'.$sessionInfoCond.'">';?>Create Job</a></li>
						
<?php } ?>
<?php 
if ($Session_UserID == ''){
?>
<li><a href="login.php">Login</a></li>
	
<?php 
}else { 
?>
<li><a href="index.html">LogOut</a></li>
	
<?php
}
?>						
</ul>

				
</div>
			
</div>
			
		
</div>
	
</nav>

	
<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Create Job</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 animate-box">
					
<h3>Create Job</h3>
					
<form action="juccreatejob.php<?php echo $sessionInfoCond ?>" method="post">
						
<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="fname">Job Name</label> -->
								<input type="text" name="txtJobName" id="txtJobName" class="form-control" placeholder="Enter Job Name">
							</div>
							
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Address</label> -->
								<input type="text" name="txtJobAddress" id="txtJobAddress" class="form-control" placeholder="Enter Address">
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Description</label> -->
								<input type="text" name="txtJobDesc" id="txtJobDesc" class="form-control" placeholder="Enter Description">
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">JobType</label> -->
								<select name="txtJobType" id="txtJobType" style="width: 100%;">

									<option value="service">Service</option>
  
									<option value="education">Education</option>
  
									<option value="cook">Cook</option>
  
									<option value="it">IT</option>

								</select>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">PersonInCharge</label> -->
								<input type="text" name="txtJobPersonInCharge" id="txtJobPersonInCharge" class="form-control" placeholder="Enter Person in charge">
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Contact</label> -->
								<input type="text" name="txtJobContactNumber" id="txtJobContactNumber" class="form-control" placeholder="Enter Contact Number">
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Max Participants</label> -->
								<input type="text" name="txtMaxParticipants" id="txtMaxParticipants" class="form-control" placeholder="Enter Max Participants">
							</div>
						</div>

						
<div class="row form-group">
							
<div class="col-md-12">
								
<!-- <label for="password">Skill</label> -->
								
<input type="text" name="txtJobSkillRequired" id="txtJobSkillRequired" class="form-control" placeholder="Enter Skill">
							
</div>
						
</div>

						
<div class="form-group">
							
<input type="submit" value="Create" class="btn btn-primary">
						
</div>

					
</form>		
				</div>
				
			</div>
			
		</div>
	</div>

	<div class="row copyright">
		<div class="col-md-12 text-center">
			<p>
				<small class="block">All Rights Reserved.</small> <br>
				<small class="block">Designed by 2K</small>
			</p>
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

