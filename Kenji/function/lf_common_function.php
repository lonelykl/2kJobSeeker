<?php

class lf_common_function{

    private $conn;

    // constructor
    function __construct() {
        require_once 'config/lf_connect.php';
        // connecting to database
        $db = new lf_connect();
        $this->conn = $db->connect();
    }

    // destructor
    function __destruct() {

    }

/**
* In Use
*/
    /**
     * get Number Row Count
     * to check the selection condition query content return by number
     */
    public function getNumRow($table,$cond) 
    {
	$txtReturn = '';
	$sqlNumRow = "SELECT COUNT(*) AS countRow FROM $table $cond";
	$stmt = $this->conn->prepare($sqlNumRow);
	$stmt->execute();

        if ($stmt->execute()) {

	    $stmt-> bind_result($token2);
 	if($stmt-> fetch() ) {
		$txtReturn = $token2;
            }
            // user existed 
            $stmt->close();

            return $txtReturn;
        } else {
            // user not existed
            $stmt->close();

            return NULL;
        }
	
     }

	/**
     * Check Duplicate Email
     */
    public function chkDupEmail($str) 
    {
	$txtReturn = '';
	$cond = "where lf_comp_code = 'kv' and lf_email = '$str' and lf_status <> 'c'";
	$sqlChkDup = "SELECT COUNT(*) AS countRow FROM lf_member_master $cond";
	$stmt = $this->conn->prepare($sqlChkDup);
	$stmt->execute();

        if ($stmt->execute()) {

	   $stmt-> bind_result($token2);
 	   if($stmt-> fetch() ) 
	   {
		$txtReturn = $token2;
           }
           // user existed 
           $stmt->close();
	   if($txtReturn == 1){
	   	return true;
	   }else{
		return false;
	   }
        } else {
            // user not existed
            $stmt->close();

            return false;
        }
	
     }

     /**
     * get Running Number by autoGenerate
     */
    public function autoGen($table,$column,$cond) 
    {
	$txtReturn = '';
	$sqlAutoGen = "SELECT distinct($column) as $column FROM $table $cond order by $column desc";
	$stmt = $this->conn->prepare($sqlAutoGen);
	$stmt->execute();

       if ($stmt->execute()) {
            $stmt-> bind_result($token2);

            if($stmt-> fetch() ) {
		$txtReturn = $token2;
            }

            $stmt->close();

           return $txtReturn;
        } else {
	   
            return NULL;
        }
	
     }

    /**
     * Check User First Time login to Update Information 
     */
    public function checkFirstLogin($userid) 
    {
	$txtReturn = '';
	$sqlFirstLogin = "SELECT lf_username from lf_member_master where lf_userid = $userid";
	$stmt = $this->conn->prepare($sqlFirstLogin);
	$stmt->execute();

       if ($stmt->execute()) 
	{
	    $stmt-> bind_result($token2);
            if($stmt-> fetch() ) {
		$txtReturn = $token2;
            } 
	    if($txtReturn != ""){
	   	return false;
	    }else{
		return true;
	    }
        } else {
            return true;
        }
	
     }

    /**
     * Not In Use
     */
    /**
     * Update Counter Number 
     */
    public function updateCounter($type) 
    {
	$txtReturn = '';
	$sqlUpdateCounter = "update lf_counter_master set lf_counter_last_no = lf_counter_last_no + 1 where lf_counter_type = $type";
	$stmt = $this->conn->prepare($sqlUpdateCounter);
	$stmt->execute();

       if ($stmt->execute()) {
          
           $stmt->close();
           return $txtReturn;
        } else {
            return NULL;
        }
	
     }
}


?>