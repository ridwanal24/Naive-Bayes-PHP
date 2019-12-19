<?php
	//deklarasi variabel data 
$i=0;
$age = array();
$gender = array();
$education = array();
$nicotine = array();
$caffeine = array();
$chocolate = array();
$alchohol = array();
$kelas = array();

	//deklarasi variabel hasil
$hasil_class_0 = array();
$hasil_class_1 = array();
$hasil_class_2 = array();
$hasil_class_3 = array();
$hasil_class_4 = array();
$hasil_class_5 = array();
$hasil_class_6 = array();

	//proses ambil data
$open=fopen('drug_consumption.csv', 'r');
while (!feof($open)) {
	$getTextLine=fgets($open);
	$explodeLine=explode(";", $getTextLine);

	list($age[$i],$gender[$i],$education[$i],$nicotine[$i],$caffeine[$i],$chocolate[$i],$alchohol[$i],$kelas[$i],$x)=$explodeLine;
		//echo $i." ".$age[$i].$gender[$i].$education[$i].$nicotine[$i].$caffeine[$i].$chocolate[$i].$alchohol[$i].$kelas[$i]."<br>";
	$i++;
}

$n = count($kelas);

/*====================================================*/

	//Menghitung P Class//
$index=0;
$count_class_0=$count_class_1=$count_class_2=$count_class_3=$count_class_4=$count_class_5=$count_class_6=$count_class_7=0;
while($index<$n){
	switch ($kelas[$index]) {
		case "class_0":
		$count_class_0++;
		break;
		case "class_1":
		$count_class_1++;
		break;
		case "class_2":
		$count_class_2++;
		break;
		case "class_3":
		$count_class_3++;
		break;
		case "class_4":
		$count_class_4++;
		break;
		case "class_5":
		$count_class_5++;
		break;
		case "class_6":
		$count_class_6++;
		break;
	}
	$index++;
}

$hasil_class_0[0]=$count_class_0/$n;
$hasil_class_1[0]=$count_class_1/$n;
$hasil_class_2[0]=$count_class_2/$n;
$hasil_class_3[0]=$count_class_3/$n;
$hasil_class_4[0]=$count_class_4/$n;
$hasil_class_5[0]=$count_class_5/$n;
$hasil_class_6[0]=$count_class_6/$n;
	//Akhir Menghitung P Class_1//

	//Menghitung P terhadap C (Age) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $age[$index]=="age_1"){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $age[$index]=="age_1") {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $age[$index]=="age_1") {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $age[$index]=="age_1") {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $age[$index]=="age_1") {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $age[$index]=="age_1") {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $age[$index]=="age_1") {
		$count6++;
	}
	$index++;
}
$hasil_class_0[1]=$count0/$count_class_0;
$hasil_class_1[1]=$count1/$count_class_1;
$hasil_class_2[1]=$count2/$count_class_2;
$hasil_class_3[1]=$count3/$count_class_3;
$hasil_class_4[1]=$count4/$count_class_4;
$hasil_class_5[1]=$count5/$count_class_5;
$hasil_class_6[1]=$count6/$count_class_6;
	//Akhir Menghitung P terhadap C (Age) //

	//Menghitung P terhadap C (Gender) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $gender[$index]=="gender_male"){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $gender[$index]=="gender_male") {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $gender[$index]=="gender_male") {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $gender[$index]=="gender_male") {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $gender[$index]=="gender_male") {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $gender[$index]=="gender_male") {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $gender[$index]=="gender_male") {
		$count6++;
	}
	$index++;
}
$hasil_class_0[2]=$count0/$count_class_0;
$hasil_class_1[2]=$count1/$count_class_1;
$hasil_class_2[2]=$count2/$count_class_2;
$hasil_class_3[2]=$count3/$count_class_3;
$hasil_class_4[2]=$count4/$count_class_4;
$hasil_class_5[2]=$count5/$count_class_5;
$hasil_class_6[2]=$count6/$count_class_6;
	//Akhir Menghitung P terhadap C (Gender) //

	//Menghitung P terhadap C (Education) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $education[$index]=="edu_5"){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $education[$index]=="edu_5") {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $education[$index]=="edu_5") {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $education[$index]=="edu_5") {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $education[$index]=="edu_5") {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $education[$index]=="edu_5") {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $education[$index]=="edu_5") {
		$count6++;
	}
	$index++;
}
$hasil_class_0[3]=$count0/$count_class_0;
$hasil_class_1[3]=$count1/$count_class_1;
$hasil_class_2[3]=$count2/$count_class_2;
$hasil_class_3[3]=$count3/$count_class_3;
$hasil_class_4[3]=$count4/$count_class_4;
$hasil_class_5[3]=$count5/$count_class_5;
$hasil_class_6[3]=$count6/$count_class_6;
	//Akhir Menghitung P terhadap C (Education) //

	//Menghitung P terhadap C (Nikotin) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $nicotine[$index]=="nikotin_1"){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $nicotine[$index]=="nikotin_1") {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $nicotine[$index]=="nikotin_1") {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $nicotine[$index]=="nikotin_1") {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $nicotine[$index]=="nikotin_1") {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $nicotine[$index]=="nikotin_1") {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $nicotine[$index]=="nikotin_1") {
		$count6++;
	}
	$index++;
}
$hasil_class_0[4]=$count0/$count_class_0;
$hasil_class_1[4]=$count1/$count_class_1;
$hasil_class_2[4]=$count2/$count_class_2;
$hasil_class_3[4]=$count3/$count_class_3;
$hasil_class_4[4]=$count4/$count_class_4;
$hasil_class_5[4]=$count5/$count_class_5;
$hasil_class_6[4]=$count6/$count_class_6;
	//Akhir Menghitung P terhadap C (Nikotin) //

	//Menghitung P terhadap C (Caffein) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $caffeine[$index]=="caffeine_5"){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $caffeine[$index]=="caffeine_5") {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $caffeine[$index]=="caffeine_5") {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $caffeine[$index]=="caffeine_5") {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $caffeine[$index]=="caffeine_5") {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $caffeine[$index]=="caffeine_5") {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $caffeine[$index]=="caffeine_5") {
		$count6++;
	}
	$index++;
}
$hasil_class_0[5]=$count0/$count_class_0;
$hasil_class_1[5]=$count1/$count_class_1;
$hasil_class_2[5]=$count2/$count_class_2;
$hasil_class_3[5]=$count3/$count_class_3;
$hasil_class_4[5]=$count4/$count_class_4;
$hasil_class_5[5]=$count5/$count_class_5;
$hasil_class_6[5]=$count6/$count_class_6;
	//Akhir Menghitung P terhadap C (Caffein) //

	//Menghitung P terhadap C (Cokelat) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $chocolate[$index]=="choco_3"){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $chocolate[$index]=="choco_3") {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $chocolate[$index]=="choco_3") {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $chocolate[$index]=="choco_3") {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $chocolate[$index]=="choco_3") {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $chocolate[$index]=="choco_3") {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $chocolate[$index]=="choco_3") {
		$count6++;
	}
	$index++;
}
$hasil_class_0[6]=$count0/$count_class_0;
$hasil_class_1[6]=$count1/$count_class_1;
$hasil_class_2[6]=$count2/$count_class_2;
$hasil_class_3[6]=$count3/$count_class_3;
$hasil_class_4[6]=$count4/$count_class_4;
$hasil_class_5[6]=$count5/$count_class_5;
$hasil_class_6[6]=$count6/$count_class_6;
	//Akhir Menghitung P terhadap C (Cokelat) //

	//Menghitung P terhadap C (Alkohol) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $alchohol[$index]=="alchohol_3"){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $alchohol[$index]=="alchohol_3") {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $alchohol[$index]=="alchohol_3") {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $alchohol[$index]=="alchohol_3") {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $alchohol[$index]=="alchohol_3") {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $alchohol[$index]=="alchohol_3") {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $alchohol[$index]=="alchohol_3") {
		$count6++;
	}
	$index++;
}
$hasil_class_0[7]=$count0/$count_class_0;
$hasil_class_1[7]=$count1/$count_class_1;
$hasil_class_2[7]=$count2/$count_class_2;
$hasil_class_3[7]=$count3/$count_class_3;
$hasil_class_4[7]=$count4/$count_class_4;
$hasil_class_5[7]=$count5/$count_class_5;
$hasil_class_6[7]=$count6/$count_class_6;
	//Akhir Menghitung P terhadap C (Alkohol) //

print_r($hasil_class_0);echo "<br>";
print_r($hasil_class_1);echo "<br>";
print_r($hasil_class_2);echo "<br>";
print_r($hasil_class_3);echo "<br>";
print_r($hasil_class_4);echo "<br>";
print_r($hasil_class_5);echo "<br>";
print_r($hasil_class_6);echo "<br>";
?>