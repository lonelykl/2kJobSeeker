<?php 
	require_once 'function/lf_common_function.php';
	$cf = new lf_common_function();
        
	require_once 'config/lf_connect.php';
        $db = new lf_connect();
	$conn = $db->connect();

$txtDBUserID = $cf->autoGen('lf_member_master','lf_userid');
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

//$redirect_url_logon = 'http://192.168.1.6/comunity/login.php';
//$redirect_url_logon_fail = 'http://192.168.1.6/comunity/register.php';

$redirect_url_logon = 'http://lonelyfamily.ddns.net/comunity/login.php';
$redirect_url_logon_fail = 'http://lonelyfamily.ddns.net/comunity/register.php';


$stmt = $conn->prepare("INSERT INTO lf_member_master(lf_comp_code,lf_userid,lf_first_name,lf_last_name,lf_email, lf_password,lf_type,lf_status,lf_locked,lf_uid_created,lf_date_created) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssssss",$txtComCode,$txtUserID,$txtFirstName,$txtLastName,$txtEmail, $txtPassword,$txtType,$txtStatus,$txtLocked,$txtUIDCreated,$txtDateCreated);
        $result = $stmt->execute();
        $stmt->close();

if($result)
{
header("Location: $redirect_url_logon");
exit();
}else{
header("Location: $redirect_url_logon_fail");
exit();
}

?>