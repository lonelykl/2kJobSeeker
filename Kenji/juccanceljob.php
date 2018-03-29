<?php 
$sessionInfoCond = '';
if (isset($_REQUEST['userID'])) {
    $Session_UserID = $_REQUEST['userID'];
    $Session_UserType = $_REQUEST['userType'];
    $sessionInfoCond = "?userID=$Session_UserID&userType=$Session_UserType";
}else{  
    $Session_UserID = '';
    $Session_UserType = '';
}

require_once 'function/lf_common_function.php';
	$cf = new lf_common_function();
        
require_once 'config/lf_connect.php';
        $db = new lf_connect();
	$conn = $db->connect();

$dt = new DateTime();
$txtComCode = 'kv';
$txtJobID = $_REQUEST['txtJobID'];

$txtUserID = $Session_UserID; 
$txtJobStatus = 'N';
$txtUIDModified = $Session_UserID;
$txtDateModified = $dt->format('Y/m/d'); 

$stmt = $conn->prepare("UPDATE lf_job_applicant SET lf_job_applicant_status = 'C' , lf_job_applicant_approver = 'C' , lf_uid_modified = '$txtUIDModified' , lf_date_modified = '$txtDateModified' WHERE lf_comp_code = ? and lf_job_id = ? and lf_job_applicant_id = ? and lf_job_applicant_status = ?");
        $stmt->bind_param("ssss",$txtComCode,$txtJobID,$txtUserID,$txtJobStatus);
        $result = $stmt->execute();
        $stmt->close();

if($result)
{
echo "<script type='text/javascript'>alert('Success to Cancel Request.');</script>";
}else{
echo "<script type='text/javascript'>alert('Failed to Cancel Request.');</script>";
exit();
}

?>