<?php
 sleep(3);
require("phplb.php");
require("config.php");
header('Content-type: text/plain');
if($phpf->CheckPost_r('pin') ){
	$pin = $_POST['pin'];
	$rst = $dbo->CheckDbValue(array('PIN'=>$pin,'Status'=>0),"pin_tb");
	if($rst === true){
		echo "#";
	}else{
		echo "##";
	}
}elseif($phpf->CheckPost_r('reg') ){
	$reg = $_POST['reg'];
	$rst = $dbo->CheckDbValue(array('RegNo'=>$reg),"studinfo_tb");
	if($rst === true){
		echo "#";
	}else{
		echo "##";
	}
	
}elseif($phpf->CheckPost_r('TPassCode')){
	//TPassCode
	$pc = $_POST['TPassCode'];
	$rst = $dbo->CheckDbValue(array('PassCode'=>$pc),"teacher_tb");
	if($rst === true){
		echo "#";
	}else{
		echo "##";
	}
}elseif($phpf->CheckPost_r('PPassCode')){
//PPassCode	
$pc = $_POST['PPassCode'];
	$rst = $dbo->CheckDbValue(array('PassCode'=>$pc, 'ID' => 1),"adminlogin_tb");
	if($rst === true){
		echo "#";
	}else{
		echo "##";
	}
}
?>