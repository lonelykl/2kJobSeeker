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
						
<li class="active"><?php echo '<a href="service.php'.$sessionInfoCond.'">';?>Services</a></li>
						
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

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<div class="page-title-services" style="width: 300px;height: 297px;margin: 0 auto;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-services-section">
		<div class="container">
			<div class="col-md-4 col-sm-4">
				<div class="feature-center">
					<h2>Volunteers</h2>
					<h3>Volunteers as Helper</h3>
    <ul>
        <li>Help poor families send their children to school.</li><br>
        
        <li>Help poor children in their studies to enable them to stay in school.</li><br>
        
        <li>Help children learn new skills to be able to secure employment in the future.</li><br>
        
		<li>Help women build a better life for themselves, their families and their community.</li><br></ul>

<h3>Volunteers as Teacher</h3>
	<ul>
    <li>We need teachers who can teach Primary Maths and English to children from Jinjang. Our classes are on Saturdays from 2 pm to 5 pm, in HELP University, KPD,  Jalan Dungun, Kuala Lumpur.
    </li>
</ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="feature-center">
					<h2>Learning Materials</h2>
					<h3>Volunteers mush learn</h3>
    <ul>
        <li>We need help in curriculum design/development. Materials that we can use to teach these children. We have around 60 children taking Maths and another 60 taking English tuition with us each Saturday. We need materials that can be used by teachers as well as workbooks for the children. </li><br>
        
		<li>Each week, children will go through workbooks with exercises that will strengthen their understanding of the respective subjects.</li><br>
    </ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="feature-center">
					<h2>Childrean School Supplies</h2>
					<ul>
    <li>We need school bags, school shoes, socks, books, stationery, etc that can be used by the children to start the school year. Each year before Christmas (early December), we host a big Christmas event for the children from this community, where we provide games, songs and lunch for the children. At the end of the party, we will distribute school bags, stationery and other essential items to encourage them to get the new year started. </li>
    <br>
</ul>
				</div>
			</div>

			
			<div class="col-md-4 col-sm-4" style="margin-top: 26%; margin-left: 1%;">
				<div class="feature-center">
					
					<h2>Sponsor A Child</h2>
<h3>How the child sponsorship works</h3>
					<ul>
    <li>Contact us to find out the details of needy children.
    </li><br>
    <li>Choose a child to sponsor.
    </li><br>
    <li>Sponsor at least RM150 per month which will cover the cost of school bus, daily lunch allowance and compulsory school fees.
    </li><br>
    <li>Alternately, your sponsorship can be pooled with other sponsors to support a child.
    </li><br>
    <li>By sponsoring a child, you can get to see the impact your sponsorship has on the chold and on the community.
    </li><br>
</ul>
					
				</div>
			</div>
			<div class="col-md-4 col-sm-4" style="margin-top: -57%;">
				<div class="feature-center">
					
					<h2>E-business</h2>
<h3>Empowering Mothers out of Poverty</h3>
					<p>In all poor communities, girls and women bear the brunt of poverty. When families struggle with getting enough food to eat, or earn enough money to send their children to school, it is always the girls who find the last to eat and first to be kept home from school. In some communities like Jinjang, the girls will be the target of vices, especially if they are not able to find jobs to help sustain their families. In families with many children, the mothers struggle with finding jobs, as they still have very young children who need to be taken care of, at home. Unable to leave the home or join the work force, they remain destitute and helpless. When you empower a woman, she can become a catalyst for positive change, whose success can benefit the family and even her community. <br><br>
    
In this E-Business, we empower mothers with the resources to work and earn a living without sacrificing their time with the family.
</p>
					
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

