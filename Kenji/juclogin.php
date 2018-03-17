<?php 

        require_once 'function/lf_common_function.php';
	$cf = new lf_common_function();
        
	require_once 'config/lf_connect.php';
        $db = new lf_connect();
	$conn = $db->connect();

$txtEmail = $_REQUEST['txtEmail'];
$txtPassword = $_REQUEST['txtPassword'];
$loginUserID = '';
$redirect_url_logon = 'http://lonelyfamily.ddns.net/comunity';
$redirect_url_logon_update = 'http://lonelyfamily.ddns.net/kv';
$redirect_url_logon_fail = 'http://lonelyfamily.ddns.net';
$result= false;


$stmt = $conn->prepare("SELECT lf_userid,lf_email from lf_member_master WHERE lf_email = ? and lf_password = ?");
$stmt->bind_param("ss",$txtEmail,$txtPassword);
$stmt->execute();
$stmt->bind_result($token2,$token3);
$stmt->store_result();

        if ($stmt->num_rows > 0) {
            // user existed
            $loginUserID = $token2; 
            $stmt->close();
            $result = true;
        } else {
            // user not existed
            $stmt->close();
            $result = false;
        }


if($result)
{
header("Location: $redirect_url_logon");
exit();
}else{
header("Location: $redirect_url_logon_fail");
exit();
}

?>