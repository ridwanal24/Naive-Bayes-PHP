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
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	switch ($kelas[$index]) {
		case "class_0":
			$count0++;
			break;
		case "class_1":
			$count1++;
			break;
		case "class_2":
			$count2++;
			break;
		case "class_3":
			$count3++;
			break;
		case "class_4":
			$count4++;
			break;
		case "class_5":
			$count5++;
			break;
		case "class_6":
			$count6++;
			break;
	}
	$index++;
}
$count_class_0=$count0;
$count_class_1=$count1;
$count_class_2=$count2;
$count_class_3=$count3;
$count_class_4=$count4;
$count_class_5=$count5;
$count_class_6=$count6;
$count_class_7=$count7;
$hasil_class_0[0]=$count0/$n;
$hasil_class_1[0]=$count1/$n;
$hasil_class_2[0]=$count2/$n;
$hasil_class_3[0]=$count3/$n;
$hasil_class_4[0]=$count4/$n;
$hasil_class_5[0]=$count5/$n;
$hasil_class_6[0]=$count6/$n;
	//Akhir Menghitung P Class_1//


?>