<?php
 
include_once('libs/config.php');  


if ($_POST['value']) {
	$id=$_POST['value'];

	$result= $DB->query("DELETE FROM `employes` WHERE employe_id=".$id);
	if ($result) {
		
		echo "success";
	}else{

		echo "error";
	}



}else{
	echo "invalid request";
}
?>