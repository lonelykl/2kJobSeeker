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
    if (isset($_REQUEST["jobID"])) 
    {
    $sessionJobID = $_REQUEST["jobID"];
    }else{
    $sessionJobID = '';
    }
}else{  
    $Session_UserID = '';
    $Session_UserType = '';
    $sessionJobID = '';
}
?>
<?php 
	require_once 'function/lf_common_function.php';
	$cf = new lf_common_function();
        
	require_once 'config/lf_connect.php';
        $db = new lf_connect();
	$conn = $db->connect();


$comcode = 'kv';
$userid =  $Session_UserID;

$stmt = $conn->prepare("SELECT lf_userid, lf_username, lf_first_name, lf_last_name, lf_email, lf_password, lf_type from lf_member_master where lf_comp_code = ? and lf_userid = ?");
$stmt->bind_param("ss",$comcode,$userid);
$stmt->execute();
$stmt->bind_result($token2,$token3,$token4,$token5,$token6,$token7,$token8);

while ( $stmt-> fetch() ) { 
?>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	
	<div class="fh6co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<h3>Update Info</h3>
					<form name="createJobForm" action="jucupdatemember.php<?php echo $sessionInfoCond ?>" method="post">
					<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Member ID</label> -->
								<input type="text" name="txtMemberID" id="txtMemberID" class="form-control" placeholder="Enter Member ID" value="<?php echo $token2; ?>" readonly>
							</div>
						</div>
					<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" name="txtEmail" id="txtEmail" class="form-control" placeholder="Enter Email" value="<?php echo $token6; ?>" readonly>
							</div>
						</div>
					<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="fname">Username</label> -->
								<input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Enter User Name" value="<?php echo $token3; ?>">
							</div>
							
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">First name</label> -->
								<input type="text" name="txtFirstName" id="txtFirstName" class="form-control" placeholder="Enter First Name" value="<?php echo $token4; ?>">
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Last Name</label> -->
								<input type="text" name="txtLastName" id="txtLastName" class="form-control" placeholder="Enter Last Name" value="<?php echo $token5; ?>">
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Password</label> -->
								<input type="password" name="txtPassword" id="txtPassword" class="form-control" placeholder="*Remain blank to not changing the password.">
								
							</div>
						</div>

						<div class="form-group">
							<input type="submit" value="Update Info" class="btn btn-primary">
						</div>

					</form>		
				</div>
				
			</div>
			
		</div>
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
	<script src="js/test.js"></script>

	</body>
<?php } ?>
</html>