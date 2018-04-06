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
	require_once 'function/lf_common_function.php';
	$cf = new lf_common_function();

        require_once 'config/lf_connect.php';
        $db = new lf_connect();
	$conn = $db->connect();

 	require_once 'config/lf_ipsetting.php';


$cond = "";
$dt = new DateTime();
$txtComCode = 'kv';
$txtDBJobID = $cf->autoGen('lf_job_master','lf_job_id',$cond);
$txtJobID = $txtDBJobID +1;
$txtJobName = $_REQUEST['txtJobName'];
$txtJobAddress = $_REQUEST['txtJobAddress'];
$txtJobDesc = $_REQUEST['txtJobDesc'];
$txtJobType = $_REQUEST['txtJobType'];
$txtJobPersonInCharge = $_REQUEST['txtJobPersonInCharge'];
$txtJobContactNumber = $_REQUEST['txtJobContactNumber'];
$txtJobSkillRequired = $_REQUEST['txtJobSkillRequired'];

$txtStatus = 'N';
$txtUIDCreated= $Session_UserID;
$txtDateCreated = $dt->format('Y/m/d'); 
$path = IP_CONFIG;

$redirect_criteria = "&txtJobID=$txtJobID&redirectFrom=1";
$redirect_url = 'http://'.$path.'/comunity/createjobform.php'.$sessionInfoCond.$redirect_criteria;
$redirect_url_fail = 'http://'.$path.'/def';
$result= false;


$stmt = $conn->prepare("INSERT INTO lf_job_master(lf_comp_code,lf_job_id,lf_job_name,lf_job_desc,lf_job_status,lf_job_type,lf_skill_required,lf_job_in_charge,lf_job_contact,lf_job_address,lf_date_created,lf_uid_created)VALUE(?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssssss",$txtComCode,$txtJobID,$txtJobName,$txtJobDesc,$txtStatus,$txtJobType,$txtJobSkillRequired,$txtJobPersonInCharge,$txtJobContactNumber,$txtJobAddress,$txtDateCreated,$txtUIDCreated);
        $result = $stmt->execute();
        $stmt->close();

if($result)
{
echo "<script type='text/javascript'>alert('Job created has been successful...');window.location = '$redirect_url'</script>";
exit();
}else{
echo "<script type='text/javascript'>alert('Job created has been failed... Please try again...');window.location = '$redirect_url_fail'</script>";
exit();
}

?>

