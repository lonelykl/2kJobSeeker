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

require_once 'config/lf_ipsetting.php';
$path = IP_CONFIG;
$redirect_url_logon_mainpage = 'http://'.$path.'/comunity/mainpage.php';
$redirect_url_logon_updateinfo = 'http://'.$path.'/comunity/updateinfoform.php';

$dt = new DateTime();
$txtComCode = 'kv';
$cond = '';
$txtMemberID = $_REQUEST['txtMemberID']; 
$txtEmail = $_REQUEST['txtEmail'];
$txtUsername = $_REQUEST['txtUsername'];
$txtFirstName = $_REQUEST['txtFirstName'];
$txtLastName = $_REQUEST['txtLastName'];
$txtPassword = $_REQUEST['txtPassword'];
if($txtPassword != ''){
$cond .= ", lf_password = '$txtPassword'" ;
}
$txtUIDModified = $Session_UserID;
$txtDateModified = $dt->format('Y/m/d'); 

if($txtUsername != ''){
$stmt = $conn->prepare("UPDATE lf_member_master SET 
lf_username = '$txtUsername', 
lf_first_name = '$txtFirstName',
lf_last_name = '$txtLastName',
lf_uid_modified = '$txtUIDModified' , 
lf_date_modified = '$txtDateModified' $cond 
WHERE lf_comp_code = ? and lf_userid = ? and lf_email = ?");
        $stmt->bind_param("sss",$txtComCode,$txtMemberID,$txtEmail);
        $result = $stmt->execute();
        $stmt->close();

if($result)
{
echo "<script type='text/javascript'>alert('Success to Update Info.');window.parent.location = '$redirect_url_logon_mainpage$sessionInfoCond'</script>";
}else{
echo "<script type='text/javascript'>alert('Failed to Update Info.');</script>";
exit();
}
} else{
echo "<script type='text/javascript'>alert('Username is a required.');window.location = '$redirect_url_logon_updateinfo$sessionInfoCond'</script>";
}
?>