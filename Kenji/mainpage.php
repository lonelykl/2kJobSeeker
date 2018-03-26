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
				
<div class="col-xs-2" style = "width: 30%;">
					
<div id="fh5co-logo">
<?php echo '<a href="mainpage.php'.$sessionInfoCond.'">';?>Jinjang Utara Community</a>
</div>
				
</div>
				
<div class="col-xs-10 text-right menu-1" style = "width: 70%;">
					
<ul>
						
<li class="active"><?php echo '<a href="mainpage.php'.$sessionInfoCond.'">';?>Home</a></li>
						
<li><?php echo '<a href="about.php'.$sessionInfoCond.'">';?>About</a></li>
						
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
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/3.jpg);">
		<div class="overlay" style="opacity: 0.7; background-color: #000000;"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Impact A Life</h1>
							<h2>Transform A Community</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	
	
	<div id="fh5co-portfolio">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Information on The Jinjang Utara Community</h2>
					<p>Jinjang Utara is littered with dilapidated rumah transit (supposed to be temporary housing). Currently, housing more than 2000 people. These are forgotten people who became disillusioned and embittered. The inhabitants waited for 40 years to date, to be relocated to their new residence under Projek Perumahan (PPR) which has yet to happen. This is 38 years later than the promised duration by the government. Even if they are offered low cost housing tomorrow, they will not be able to afford it as they can hardly afford the RM40 per month rent even now. The average combined income per month for each family is less than RM1000.</p>
				</div>
			</div>
			<div class="row">
				<div class="project">
					<div class="col-md-8 col-md-push-5 animate-box" data-animate-effect="fadeInLeft">
						<img class="img-responsive" src="images/1.jpg" alt="work">
					</div>
					<div class="col-md-4 col-md-pull-8 animate-box" data-animate-effect="fadeInRight">
						<div class="mt" style = "width: 130%; margin-top: 0px;">
							<p>The integrity of the rumah transit is questionable because they were not built to last. This poses a health and safety hazard for the family staying under the roof of each unit. The occupants have grown over the years to include three generations with an average of ten people in each unit. Each unit is cramped in a 480-square-feet space for the entire family of over 10 pax each.</p>
							<p>The children in Jinjang Utara have been growing up in a poverty stricken environment. Some were abandoned by their parents or are neglected in an environment of abject poverty. Violence is rampant in this place. Teenagers are at risk of being recruited by gangs. With their home so broken and crowded, the teenagers have no place to turn to. The gangs offered financial and communal support/relief, including a sense of belonging.</p>
						</div>
					</div>
				</div>
				<div class="project">
					<div class="col-md-8 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
						<img class="img-responsive" src="images/2.jpg" alt="work">
					</div>
					<div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
						<div class="mt" style=" width: 130%; margin-top: 0px; margin-left: -66px;">
							<p>The chief focus is on education and social concern activities. They conduct weekly outdoor activities to instill moral values in children. Over 100 children attend their session every week. Over the years, many of these children have progressed to complete their secondary education. Few are even completing their college education through the sponsorship of kind benefactors like HELP Education Group. </p>
							<p>Jonathan and Mary make home visits weekly to know each family’s respective needs. In the process, they are supporting some of the families’ need such as education (school bus), groceries, school supplies, etc. Because of the financial burden, many of these children are undernourished and some are even deprived of food for many days. They then have to survive on occasional leftovers offered by kind neighbors.</p>
							<p>The children are constantly subjected to danger of bad influence, perversion and exploitation daily under such conditions. Occasionally, Jonathan and Mary will be called for counselling, as the men are thrown in jail, taken into drug rehab, youths arrested for fights or drug possession, etc. The work is immense with never ending challenges.</p>
						</div>
					</div>
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

