<?php 
	require_once 'function/lf_common_function.php';
	$cf = new lf_common_function();
        
	require_once 'config/lf_connect.php';
        $db = new lf_connect();
	$conn = $db->connect();

	require_once 'config/lf_ipsetting.php';

$cond = '';
$txtDBUserID = $cf->autoGen('lf_member_master','lf_userid',$cond);
$dt = new DateTime();
$txtComCode = 'kv';
$txtUserID = $txtDBUserID +1;
$txtFirstName = $_REQUEST['txtFirstName'];
$txtLastName = $_REQUEST['txtLastName'];
$txtEmail = $_REQUEST['txtEmail'];
$txtPassword = $_REQUEST['txtPassword'];
$txtType = $_REQUEST['txtType'];
$txtStatus = 'N';
$txtLocked = '0';
$txtUIDCreated= 'SYSTEM';
$txtDateCreated = $dt->format('Y/m/d'); 
$path = IP_CONFIG;
$chkDupUser = $cf->chkDupEmail($txtEmail);
$result = false;

$redirect_url_logon = 'http://'.$path.'/comunity/login.php';
$redirect_url_logon_fail = 'http://'.$path.'/comunity/register.php';
if(!$chkDupUser){
$stmt = $conn->prepare("INSERT INTO lf_member_master(lf_comp_code,lf_userid,lf_first_name,lf_last_name,lf_email, lf_password,lf_type,lf_status,lf_locked,lf_uid_created,lf_date_created) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssssss",$txtComCode,$txtUserID,$txtFirstName,$txtLastName,$txtEmail, $txtPassword,$txtType,$txtStatus,$txtLocked,$txtUIDCreated,$txtDateCreated);
        $result = $stmt->execute();
        $stmt->close();

if($result)
{
echo "<script type='text/javascript'>alert('Success to register an account...');window.location='$redirect_url_logon'</script>";
exit();
}else{
echo "<script type='text/javascript'>alert('Failed to register an account...');window.location='$redirect_url_logon_fail';</script>";
exit();
}
}else
{
echo "<script type='text/javascript'>alert('Duplicate Email Detected...');window.location='$redirect_url_logon_fail';</script>";
}

?>