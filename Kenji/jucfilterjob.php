<html>
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

$cond = "where lf_comp_code = '$comcode' and lf_uid_created = '$Session_UserID'";


$stmt = $conn->prepare("SELECT lf_job_id,lf_job_name,lf_job_desc,lf_job_status,lf_job_type from lf_job_master $cond" );
$stmt->execute();
$stmt->bind_result($token2,$token3,$token4,$token5,$token6);
 
?>
<table border='2'>
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
<input type="submit" value="View" id="btnView" onclick="location.href ='createjobform.php?txtJobID=<?php echo $token2.$sessionInfoCond;?>'">
</td>
          <?php  }
 $stmt->close();?>


</body>
</html>