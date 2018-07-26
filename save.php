<?php
 
include_once('libs/config.php');  
 

if (!empty($_POST)) { 
$fname=filter($_POST['fname']);
$lname=filter($_POST['lname']);
$email=filter($_POST['email']);
$duty=filter($_POST['duty']);

$dob=date("Y-m-d",strtotime($_POST['dob'])); 
$join_date=date("Y-m-d",strtotime($_POST['join_date']));
 
if (isset($_POST['employe_id'])) {
 	
	$employe_id=$_POST['employe_id'];
 	$DB->query("UPDATE  `employes` SET  
		`fname` =?,
		`lname` =?,
		`email` =?, 
		`duty` =?, 
		`dob` =?, 
		`join_date` =?, 		
		`update_on` =?

		 WHERE employe_id = ? ", 
	array($fname,
		$lname,
		$email,
		$duty,
		$dob,
		$join_date,
		date('Y-m-d h:i:s'), 
		$employe_id   
		));
	 
	echo $employe_id;





}else{
	$DB->query("INSERT INTO `employes`( 
		`fname`,
		`lname`,
		`email`, 
		`duty`, 
		`dob`, 
		`join_date`, 
		`create_on`, 
		`update_on`,   
		`status`) VALUES(?,?,?,?,?,?,?,?,?)", 
	array($fname,
		$lname,
		$email,
		$duty,
		$dob,
		$join_date,
		date('Y-m-d h:i:s'), 
		date('Y-m-d h:i:s'),   
		1));
	 
	echo $id=$DB->lastInsertId();
}
 

 


}else{
	echo "invalid request";
}


function filter($field){
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+/")))){
        return $field;
    }else{
        return FALSE;
    }
}  



?>
