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
$redirectForm='';
$jobID='';
if (isset($_REQUEST["userID"])) {
    $Session_UserID = $_REQUEST["userID"];
    $Session_UserType = $_REQUEST["userType"];
    $sessionInfoCond = "?userID=$Session_UserID&userType=$Session_UserType";
	if (isset($_REQUEST["redirectFrom"])) 
	{
	$redirectForm = $_REQUEST["redirectFrom"];	
	}
}else{  
    $Session_UserID = '';
    $Session_UserType = '';
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
$jobid = $_REQUEST["txtJobID"];
$readonlypermenant = 'readonly';
$readonly= '';
if ($Session_UserType != 'Client' && $Session_UserType != 'client') { 
$readonly = 'readonly';
}

$stmt = $conn->prepare("SELECT lf_job_id,lf_job_name,lf_job_desc,lf_job_type,lf_skill_required,lf_job_in_charge,lf_job_contact,lf_job_address, lf_job_max_participant from lf_job_master where lf_comp_code = ? and lf_job_id = ?");
$stmt->bind_param("ss",$comcode,$jobid);
$stmt->execute();
$stmt->bind_result($token2,$token3,$token4,$token5,$token6,$token7,$token8,$token9,$token10);

while ( $stmt-> fetch() ) { 
?>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	
	<div class="fh5co-section" style="padding:0">
		<div class="container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<h3>Job Infomation</h3>
					<form name="createJobForm" action="jucupdatejob.php" onsubmit="return(validatejob());">
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="fname">Job ID</label> -->
								<input type="text" name="txtJobID" id="txtJobID" class="form-control" placeholder="Enter Job ID" value="<?php echo $token2 ?>" <?php echo $readonlypermenant ?>>
							</div>
							
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="fname">Job Name</label> -->
								<input type="text" name="txtJobName" id="txtJobName" class="form-control" placeholder="Enter Job Name" value="<?php echo $token3 ?>" <?php echo $readonly ?>>
							</div>
							
						</div>	
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Description</label> -->
								<input type="text" name="txtJobDesc" id="txtJobDesc" class="form-control" placeholder="Enter Description" value="<?php echo $token4 ?>" <?php echo $readonly ?>>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">JobType</label> -->
								<select name="txtJobType" id="txtJobType" style="width: 100%;">
									<option value="">Please Select one..</option>
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
								<input type="text" name="txtJobPersonInCharge" id="txtJobPersonInCharge" class="form-control" placeholder="Enter Person in charge" value="<?php echo $token7 ?>"<?php echo $readonly ?>>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Contact</label> -->
								<input type="text" name="txtJobContactNumber" id="txtJobContactNumber" class="form-control" placeholder="Enter Contact Number" value="<?php echo $token8 ?>"<?php echo $readonly ?>>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Max Participants</label> -->
								<input type="text" name="txtMaxParticipants" id="txtMaxParticipants" class="form-control" placeholder="Enter Max Participants" value="<?php echo $token10 ?>" <?php echo $readonly ?>>
							</div>
						</div>

						<div class="row form-group">
							
<div class="col-md-12">
								
<!-- <label for="password">Skill</label> -->
								
<input type="text" name="txtJobSkillRequired" id="txtJobSkillRequired" class="form-control" placeholder="Enter Skill" value="<?php echo $token6 ?>"<?php echo $readonly ?>>
							
</div>
						
</div>

	
<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Address</label> -->
								<input type="text" name="txtJobAddress" id="txtJobAddress" class="form-control" placeholder="Enter Address" value="<?php echo $token9 ?>" <?php echo $readonly ?>>
							</div>
						</div>
						<?php if ($redirectForm == '') { ?>
						<div class="form-group">
							
							<input type="submit" value="Update" class="btn btn-primary">
						</div>
					</form>	<?php } else { ?>
<div class="form-group">
							<input type="submit" value="Confirm" class="btn btn-primary">
							<input type="submit" value="Update Info" class="btn btn-primary">
			</div> <?php } ?>	</div>
				
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