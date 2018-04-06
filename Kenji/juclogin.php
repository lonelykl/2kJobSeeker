<?php 

        require_once 'function/lf_common_function.php';
	$cf = new lf_common_function();
        
	require_once 'config/lf_connect.php';
        $db = new lf_connect();
	$conn = $db->connect();

 	require_once 'config/lf_ipsetting.php';

$txtEmail = $_REQUEST['txtEmail'];
$txtPassword = $_REQUEST['txtPassword'];
$loginUserID = '';
$loginUserType = '';
$userFirstLogin = false;
$sessionInfoCond = '';
$path = IP_CONFIG;

$redirect_url_logon_mainpage = 'http://'.$path.'/comunity/mainpage.php';
$redirect_url_logon_update = 'http://'.$path.'/comunity/updateInfoform.php';
$redirect_url_logon_fail = 'http://'.$path.'/comunity/login.php';


$result= false;


$stmt = $conn->prepare("SELECT lf_userid,lf_email,lf_type from lf_member_master WHERE lf_email = ? and lf_password = ?");
$stmt->bind_param("ss",$txtEmail,$txtPassword);
$stmt->execute();
$stmt->bind_result($token2,$token3,$token4);

        if ($stmt->fetch()) {
            // user existed
	    $loginUserID = $token2;
	    $loginUserType = $token4;
	    $stmt->close();
            $result = true;
	    $userFirstLogin = $cf->checkFirstLogin($loginUserID); 
        } else {
            // user not existed
            $stmt->close();
            $result = false;
        }


if($result)
{
if($userFirstLogin){
$redirect_url_logon_update .=  "?userID=$loginUserID&userType=$loginUserType";
echo "<script type='text/javascript'>alert('First Time log in detected, please update personal information.');window.location = '$redirect_url_logon_update'</script>";
exit();
}else{
$redirect_url_logon_mainpage .= "?userID=$loginUserID&userType=$loginUserType";
header("Location: $redirect_url_logon_mainpage");
exit();
}
}else{
echo "<script type='text/javascript'>alert('Login Failed... Please Try Again...');window.location = '$redirect_url_logon_fail'</script>";
exit();
}

?>