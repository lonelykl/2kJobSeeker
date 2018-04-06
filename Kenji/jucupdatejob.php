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
$txtJobName = $_REQUEST['txtJobName'];
$txtJobDesc = $_REQUEST['txtJobDesc'];
$txtJobType = $_REQUEST['txtJobType'];
$txtJobPersonInCharge = $_REQUEST['txtJobPersonInCharge'];
$txtJobContactNumber = $_REQUEST['txtJobContactNumber'];
$txtMaxParticipants = $_REQUEST['txtMaxParticipants'];
$txtJobSkillRequired = $_REQUEST['txtJobSkillRequired'];
$txtJobAddress = $_REQUEST['txtJobAddress'];

$txtUserID = $Session_UserID; 
$txtUIDModified = $Session_UserID;
$txtDateModified = $dt->format('Y/m/d'); 

$stmt = $conn->prepare("UPDATE lf_job_master SET lf_job_name = '$txtJobName' , lf_job_desc = '$txtJobDesc' ,lf_job_type = '$txtJobType', lf_job_in_charge = '$txtJobPersonInCharge' ,lf_job_contact = '$txtJobContactNumber' ,lf_job_max_participant = '$txtMaxParticipants' ,lf_skill_required = '$txtJobSkillRequired' ,lf_job_address = '$txtJobAddress' , lf_uid_modified = '$txtUIDModified' , lf_date_modified = '$txtDateModified' WHERE lf_comp_code = ? and lf_job_id = ?");
        $stmt->bind_param("ss",$txtComCode,$txtJobID);
        $result = $stmt->execute();
        $stmt->close();

if($result)
{
echo "<script type='text/javascript'>alert('Success to Update Job Infomation.');</script>";
}else{
echo "<script type='text/javascript'>alert('Failed to Update Job Infomation.');</script>";
exit();
}

?>