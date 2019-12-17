<?php
$age = array("1","1","2","3","3","3","2","1","1","3","1","2","2","3");
$income = array("3","3","3","2","1","1","1","2","1","2","2","2","3","2");
$student = array("1","1","1","1","2","2","2","1","2","2","2","1","2","1",);
$credit_rating= array("1","2","1","1","1","2","2","1","1","1","2","2","1","2");
$buys_computer= array("no","no","yes","yes","yes","no","yes","no","yes","yes","yes","yes","yes","no");

$p_yes = array();
$p_no=array();

//Menghitung P YES
$index=0;
$n = count($buys_computer);
$count=0;

while($index<$n){
	if($buys_computer[$index]=="yes"){
		$count++;
	}
	$index++;
}
$p_yes[0]=$count;
//==================

//Menghitung P NO
$index=0;
$n = count($buys_computer);
$count=0;

while($index<$n){
	if($buys_computer[$index]=="no"){
		$count++;
	}
	$index++;
}
$p_no[0]=$count;
//==================

/**/

//Menghitung P X terhadap C YES
$index=0;
$n = count($buys_computer);
$count=0;

while($index<$n){
	if($buys_computer[$index]=="yes" AND $age[$index]=="1"){
		$count++;
	}
	$index++;
}
$p_yes[1]=$count;


?>