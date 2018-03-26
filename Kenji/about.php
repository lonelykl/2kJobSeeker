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
		
	
Website: 		
http://freehtml5.co/
	
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
				
<div class="col-xs-2" style = "width: 30%;">
					
<div id="fh5co-logo">
<?php echo '<a href="mainpage.php'.$sessionInfoCond.'">';?>Jinjang Utara Community</a>
</div>
</div>
				
<div class="col-xs-10 text-right menu-1" style = "width: 70%;">
					
<ul>
						
<li><?php echo '<a href="mainpage.php'.$sessionInfoCond.'">';?>Home</a></li>
						
<li class="active"><?php echo '<a href="about.php'.$sessionInfoCond.'">';?>About</a></li>
						
<li><?php echo '<a href="service.php'.$sessionInfoCond.'">';?>Services</a></li>
						
<li><?php echo '<a href="work.php'.$sessionInfoCond.'">';?>Donation</a></li>
						
<li><?php echo '<a href="contact.php'.$sessionInfoCond.'">';?>Contact</a></li>
						
<?php 
if ($Session_UserID != ''){
?>
						
<li><?php echo '<a href="updateinfo.php'.$sessionInfoCond.'">';?>Update Info</a></li>			
<li><?php echo '<a href="search.php'.$sessionInfoCond.'">';?>Search</a></li>

<?php
}
?>						
<?php 
if ($Session_UserType == 'client' ||$Session_UserType == 'Client'){						
?>
<li><?php echo '<a href="createjob.php'.$sessionInfoCond.'">';?>Create Job</a></li>
						
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
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							 <div class="page-title-aboutus" style="width: 300px;height: 297px;margin: 0 auto;">>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-about-section">
		<div class="container">
			<div class="about-content">
				<div class="row animate-box">
					<div class="col-md-6 col-md-pull-1" style="width: 110%;">
						<div class="desc" style="text-align: center; margin-left: 70px;">
							<h2>Literacy and Numeracy Programme</h2>
							<p>Education has an important role to play in the eradication of poverty. Unfortunately for many families living in poverty, education is a luxury they cannot afford. This is a great tragedy, as education should be a basic human right that must be met.<br><br>

The effects of poverty had resulted in some children growing up in poverty stricken homes, suffering more frequent and persistent health problems compared to children who grow up under better financial circumstances. Children raised under poverty noticeably, tend to miss school more often because of illness, level of stress at home, lack of child- care facilities, and unfortunately, sometimes, violence at home. As our nation progresses, there needs to be intervention programmes for the poor to ensure they are not left behind.<br><br>
    
Even though schooling is free here in Malaysia, those who live in poverty still cannot afford to pay for their children’s miscellaneous fees such as activities, textbooks and uniforms, and their meals. Now in this age and era, each child needs a computer, and these items that we take for granted are not cheap for those who are destitute. <br><br>

Sadly, those who are destitute would rather send their children out to work, so that they can earn a living to support their parents and siblings. These children should remain in school, as it is proven that each year they remain in school their earning potential increases by 10-20%.  <br><br>

English may not be the most spoken language in the world, but it remains as the dominant language for business and has become almost a necessity for people to enter a global workforce. Its importance in the global market place therefore cannot be understated, as learning English really can change lives.</p> 
							<p>Hence, the literacy project was launched in December 2014, giving opportunities for the resident children to unlock their full potential and find meaningful careers in the future. <br><br>
    
The children in the Jinjang community are especially weak in the foundational subjects of English, Maths and Science. The Maths Numeracy Project for the children from Jinjang Utara then followed suit in early 2017. <br><br>

We are committed to do what we can to improve the literacy and numeracy skills of those who are left behind. <br><br>

Although some supporters have donated generously each year to charity, the needs of the poor cannot all be met. There are only so much we can do. Many households in destitute require financial aid for many things including tuition and remedial classes for subjects that they are weak in.<br><br>

This is a small project, but one that must continue and sustain itself, so that it will have a greater impact on these children’s lives. We encourage you to join us in our effort in uplifting our communities and making a difference in their lives. It stems from a simple conviction that we all share, that every child and every life matters, for our community and for the future of our nation.<br><br>

 “Life is not a competition. Life is about helping and inspiring others, so we can reach our full potential”</p>
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

