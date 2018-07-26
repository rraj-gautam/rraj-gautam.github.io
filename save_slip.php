<?php
 
include_once('libs/config.php');  
 

if (!empty($_POST)) { 
 

$employe_id=filter($_POST['employe_id']);

$basic_pay=filter($_POST['basic_pay']);

$hra=filter($_POST['hra']);

$conveyance=filter($_POST['conveyance']);

$provident_fund=filter($_POST['provident_fund']);

$esi=filter($_POST['esi']);

$loan=filter($_POST['loan']);

$tax=filter($_POST['tax']);

$tsd=filter($_POST['tsd']);

$total_addition=filter($_POST['total_addition']);

$total_deduction=filter($_POST['total_deduction']);

$net_salary=filter($_POST['net_salary']);

$salary_date=filter($_POST['salary_date']);

 
 
 
 
$DB->query("INSERT INTO `salary_slip`( 
	`employe_id`,
	`basic_pay`,
	`hra`, 
	`conveyance`, 
	`provident_fund`, 
	`esi`, 
	`loan`, 
	`tax`,
	`tsd`,
	`total_addition`,
	`total_deduction`,
	`net_salary`,
	`salary_date`,
	`create_on`,
	`update_on`,   
	`status`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", 
array($employe_id,
	$basic_pay,
	$hra,
	$conveyance,
	$provident_fund,
	$esi,
	$loan,
	$tax,
	$tsd,
	$total_addition,
	$total_deduction,
	$net_salary,
	$salary_date,
	date('Y-m-d h:i:s'), 
	date('Y-m-d h:i:s'),   
	1));
 
echo "success";
 


}else{
	echo "invalid request";
}


function filter($field){
    // Sanitize user name
    // $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // // Validate user name
    // if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+/")))){
    //     return $field;
    // }else{
    //     return FALSE;
    // }
    return $field;
}  



?>
