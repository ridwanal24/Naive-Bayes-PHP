<div class="container-fluid">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6 bg-light rounded p-3">

<?php
$age = array("1","1","2","3","3","3","2","1","1","3","1","2","2","3");
$income = array("3","3","3","2","1","1","1","2","1","2","2","2","3","2");
$student = array("1","1","1","1","2","2","2","1","2","2","2","1","2","1",);
$credit_rating= array("1","2","1","1","1","2","2","1","1","1","2","2","1","2");
$buys_computer= array("no","no","yes","yes","yes","no","yes","no","yes","yes","yes","yes","yes","no");

$p_yes = array();
$p_no = array();

//Menghitung P YES//
$index=0;
$n = count($buys_computer);
$count=0;

while($index<$n){
	if($buys_computer[$index]=="yes"){
		$count++;
	}
	
	$index++;
}
$count_yes=$count;
$p_yes[0]=$count/$n;

//==========================================================

//Menghitung P NO//
$index=0;
$n = count($buys_computer);
$count=0;

while($index<$n){
	if($buys_computer[$index]=="no"){
		$count++;
	}
	$index++;
}
$count_no=$count;
$p_no[0]=$count/$n;
//==========================================================



/*===========Menghitung P X terhadap C YES & C NO===========*/

//Menghitung P X terhadap C YES//

//AGE//
$index=0;
$n = count($buys_computer);
$count=0;

while($index<$n){
	if($buys_computer[$index]=="yes" AND $age[$index]=="1"){
		$count++;
	}
	$index++;
}
$p_yes[1]=$count/$count_yes;


//INCOME//
$index=0;
$n = count($buys_computer);
$count=0;

while($index<$n){
	if($buys_computer[$index]=="yes" AND $income[$index]=="2"){
		$count++;
	}
	$index++;
}
$p_yes[2]=$count/$count_yes;

//STUDENT_STATUS//
$index=0;
$n = count($buys_computer);
$count=0;

while($index<$n){
	if($buys_computer[$index]=="yes" AND $student[$index]=="2"){
		$count++;
	}
	$index++;
}
$p_yes[3]=$count/$count_yes;

//CREDIT_RATING//
$index=0;
$n = count($buys_computer);
$count=0;

while($index<$n){
	if($buys_computer[$index]=="yes" AND $credit_rating[$index]=="1"){
		$count++;
	}
	$index++;
}
$p_yes[4]=$count/$count_yes;

//HITUNG YES TOTAL//
$index=0;
$n=count($p_yes);
$hasil_yes=1;
while ($index<$n){
	$hasil_yes=$hasil_yes*$p_yes[$index];
	$index++;
}
//=======================================//

//Menghitung P X terhadap C NO//

//AGE//
$index=0;
$n = count($buys_computer);
$count=0;

while($index<$n){
	if($buys_computer[$index]=="no" AND $age[$index]=="1"){
		$count++;
	}
	$index++;
}
$p_no[1]=$count/$count_no;


//INCOME//
$index=0;
$n = count($buys_computer);
$count=0;

while($index<$n){
	if($buys_computer[$index]=="no" AND $income[$index]=="2"){
		$count++;
	}
	$index++;
}
$p_no[2]=$count/$count_no;

//STUDENT_STATUS//
$index=0;
$n = count($buys_computer);
$count=0;

while($index<$n){
	if($buys_computer[$index]=="no" AND $student[$index]=="2"){
		$count++;
	}
	$index++;
}
$p_no[3]=$count/$count_no;

//CREDIT_RATING//
$index=0;
$n = count($buys_computer);
$count=0;

while($index<$n){
	if($buys_computer[$index]=="no" AND $credit_rating[$index]=="1"){
		$count++;
	}
	$index++;
}
$p_no[4]=$count/$count_no;

//HITUNG YES TOTAL//
$index=0;
$n=count($p_yes);
$hasil_no=1;
while ($index<$n){
	$hasil_no=$hasil_no*$p_no[$index];
	$index++;
}

/*==========================================================*/

echo "P(yes) = ".$hasil_yes."<br>";
echo "P(no) = ".$hasil_no."<br>";

?>

</div>
<div class="col-md-3"></div>
</div>


</div>
