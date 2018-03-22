<?php 

        require_once 'function/lf_common_function.php';
	$cf = new lf_common_function();
        
	require_once 'config/lf_connect.php';
        $db = new lf_connect();
	$conn = $db->connect();

$txtEmail = $_REQUEST['txtEmail'];
$txtPassword = $_REQUEST['txtPassword'];
$loginUserID = '1';
$loginUserType = 'user';
$loginUserTypeBool = true;

//$redirect_url_logon_client = 'http://192.168.1.6/comunity/adminmainpage.php';//$redirect_url_logon_user = 'http://192.168.1.6/comunity/usermainpage.html';
//$redirect_url_logon_update = 'http://192.168.1.6/updateInfo.php';
//$redirect_url_logon_fail = 'http://192.168.1.6';

$redirect_url_logon_client = 'http://lonelyfamily.ddns.net/comunity/adminmainpage.php';
$redirect_url_logon_user = 'http://lonelyfamily.ddns.net/comunity/usermainpage.html';$redirect_url_logon_update = 'http://lonelyfamily.ddns.net/updateInfo.php';
$redirect_url_logon_fail = 'http://lonelyfamily.ddns.net';
$result= false;


$stmt = $conn->prepare("SELECT lf_userid,lf_email,lf_type from lf_member_master WHERE lf_email = ? and lf_password = ?");
$stmt->bind_param("ss",$txtEmail,$txtPassword);
$stmt->execute();
$stmt->bind_result($token2,$token3,$token4);
$stmt->store_result();

        if ($stmt->num_rows > 0) {
            // user existed
            $stmt->close();
            $result = true;
        } else {
            // user not existed
            $stmt->close();
            $result = false;
        }


if($result)
{
if($loginUserTypeBool){
//$redirect_url_logon_client .= "?userID=$loginUserID&userType=$loginUserType";
header("Location: $redirect_url_logon_client");
exit();
}else{
header("Location: $redirect_url_logon_user");
exit();
}
}else{
header("Location: $redirect_url_logon_fail");
exit();
}

?>