<html>
<body>

<script>
function goBack() {
    window.history.back();
}
</script>
<?php 

  require_once 'config/lf_connect.php';
        $db = new lf_connect();
	$conn = $db->connect();

$txtEmail = 'N';
$seqNo = 0;

$comcode = 'kv';
$string = $_REQUEST['txtJobID'];

$stmt = $conn->prepare("SELECT lf_job_id,lf_job_name,lf_job_desc,lf_job_status,lf_job_type from lf_job_master where lf_comp_code = ? and lf_job_id = ?");
$stmt->bind_param("ss",$comcode,$string);
$stmt->execute();
$stmt->bind_result($token2,$token3,$token4,$token5,$token6);

while ( $stmt-> fetch() ) { 
?>
<table border ='1'>
<tr>
<td>
Session ID
</td>
<td>
:
</td>
<td>
<?php //echo $_REQUEST['userID']; ?>
</td>
</tr>

<tr>
<td>
Job ID
</td>
<td>
:
</td>
<td>
<?php echo $token2; ?>
</td>
</tr>

<tr>
<td>
Job Name
</td>
<td>
:
</td>
<td>
<?php echo $token3; ?>
</td>
</tr>

<tr>
<td>
Job Desc
</td>
<td>
:
</td>
<td>
<?php echo $token4; ?>
</td>
</tr>

<tr>
<td>
Job Status
</td>
<td>
:
</td>
<td>
<?php echo $token5; ?>
</td>
</tr>

<tr>
<td>
Job Type
</td>
<td>
:
</td>
<td>
<?php echo $token6; ?>
</td>
</tr>


    <?php  }
 $stmt->close();?>
</table>
<br>
<table border='1'>
<tr>
<td width='100px'>
<button onclick="goBack()">Back</button>
</td>
<td width='100px'>
</td>
<td width='100px'>
<button onclick="goBack()">Back</button>
</td>
</tr>
</table>

</body>
</html>