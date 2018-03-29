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

$cond = " where lf_comp_code = '$txtComCode' and lf_job_id ='$txtJobID'";
$txtDBJobSeq = $cf->autoGen('lf_job_applicant','lf_job_seq_no',$cond);

if (!$txtDBJobSeq){
$txtJobSeqNo = 1;
}else{
$txtJobSeqNo = $txtDBJobSeq + 1;
} 

$txtUserID = $Session_UserID;
$txtJobApprover = 'P'; 
$txtJobStatus = 'N';
$txtUIDCreated = $Session_UserID;
$txtDateCreated = $dt->format('Y/m/d'); 

$stmt = $conn->prepare("INSERT INTO lf_job_applicant(lf_comp_code,lf_job_id,lf_job_seq_no,lf_job_applicant_approver,lf_job_applicant_id, lf_job_applicant_status,lf_uid_created,lf_date_created) VALUES(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssss",$txtComCode,$txtJobID,$txtJobSeqNo,$txtJobApprover,$txtUserID,$txtJobStatus,$txtUIDCreated,$txtDateCreated);
        $result = $stmt->execute();
        $stmt->close();

if($result)
{
echo "<script type='text/javascript'>alert('Job has been apply successful.');</script>";
}else{
echo "<script type='text/javascript'>alert('Job has been failed to apply.');</script>";
exit();
}

?>