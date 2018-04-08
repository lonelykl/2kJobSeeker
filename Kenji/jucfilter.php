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
	
<body>
<?php
$sessionInfoCond = '';
if (isset($_REQUEST["userID"])) {
    $Session_UserID = $_REQUEST["userID"];
    $Session_UserType = $_REQUEST["userType"];
    $sessionInfoCond = "&userID=$Session_UserID&userType=$Session_UserType";
}else{  
    $Session_UserID = '';
    $Session_UserType = '';
}

        require_once 'config/lf_connect.php';
        $db = new lf_connect();
	$conn = $db->connect();

$txtEmail = 'N';
$seqNo = 0;

$comcode = 'kv';
$string = $_REQUEST['txtFilter'];

$cond = "where lf_comp_code = '$comcode' and lf_job_status <> 'c'";

if ($string != ''){ 
$cond .= " and lf_job_type = '$string'" ; 
}

$stmt = $conn->prepare("SELECT lf_job_id,lf_job_name,lf_job_desc,lf_job_status,lf_job_type from lf_job_master $cond" );
$stmt->execute();
$stmt->bind_result($token2,$token3,$token4,$token5,$token6);
 
?>
<table class="table table-striped">
<tr>
<td>
No.
</td>
<td>
Job ID
</td>
<td>
Job Name
</td>
<td>
Job Desc
</td>
<td>
Job Status
</td>
<td>
Job Type
</td>
<td>
</td>
</tr>
<?php
while ( $stmt-> fetch() ) { 
$seqNo = $seqNo +1;
?>
               <tr>
<td>
<?php echo $seqNo; ?>
</td>
<td>
<?php echo $token2; ?>
</td>
<td>
<?php echo $token3; ?>
</td>
<td>
<?php echo $token4; ?>
</td>
<td>
<?php echo $token5; ?>
</td>
<td>
<?php echo $token6; ?>
</td>
<td>
<input type="submit" value="View" id="btnView" onclick="location.href ='jucjobdetails.php?txtJobID=<?php echo $token2.$sessionInfoCond;?>'">
</td>
          <?php  }
 $stmt->close();?>


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
</html>