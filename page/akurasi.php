<?php
//Variabel Tester
$t_i = 0;
$t_age = array();
$t_gender = array();
$t_education = array();
$t_nicotine = array();
$T_caffeine = array();
$t_chocolate = array();
$t_alchohol = array();
$t_kelas = array();

//deklarasi variabel data Training
$i=0;
$koma=20;
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

//Proses Ambil Data & Pemisahan
$open=fopen('../drug_consumption.csv', 'r');
while (!feof($open)) {
	$getTextLine=fgets($open);
	$explodeLine=explode(",", $getTextLine);

	if ($i<1508) {
		list($age[$i],$gender[$i],$education[$i],$nicotine[$i],$caffeine[$i],$chocolate[$i],$alchohol[$i],$kelas[$i],$x)=$explodeLine;	
	}else{
		list($t_age[$t_i],$t_gender[$t_i],$t_education[$t_i],$t_nicotine[$t_i],$t_caffeine[$t_i],$t_chocolate[$t_i],$t_alchohol[$t_i],$t_kelas[$t_i],$x)=$explodeLine;
		$t_i++;
	}	
	$i++;
}

$n = count($kelas);

/*====================================================*/

$i=0;
$jumlah_data_total=0;
$jumlah_data_sesuai=0;
while($i<377){
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
	}
	$index++;
}

$hasil_class_0[0]=$count_class_0/$n;
$hasil_class_1[0]=$count_class_1/$n;
$hasil_class_2[0]=$count_class_2/$n;
	//Akhir Menghitung P Class_1//

	//Menghitung P terhadap C (Age) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $age[$index]==$t_age[$i]){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $age[$index]==$t_age[$i]) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $age[$index]==$t_age[$i]) {
		$count2++;
	}
	$index++;
}
$hasil_class_0[1]=$count0/$count_class_0;
$hasil_class_1[1]=$count1/$count_class_1;
$hasil_class_2[1]=$count2/$count_class_2;

	//Akhir Menghitung P terhadap C (Age) //

	//Menghitung P terhadap C (Gender) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $gender[$index]==$gender[$index]){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $gender[$index]==$t_gender[$i]) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $gender[$index]==$t_gender[$i]) {
		$count2++;
	}
	$index++;
}
$hasil_class_0[2]=$count0/$count_class_0;
$hasil_class_1[2]=$count1/$count_class_1;
$hasil_class_2[2]=$count2/$count_class_2;

	//Akhir Menghitung P terhadap C (Gender) //

	//Menghitung P terhadap C (Education) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $education[$index]==$t_education[$i]){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $education[$index]==$t_education[$i]) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $education[$index]==$t_education[$i]) {
		$count2++;
	}
	$index++;
}
$hasil_class_0[3]=$count0/$count_class_0;
$hasil_class_1[3]=$count1/$count_class_1;
$hasil_class_2[3]=$count2/$count_class_2;

	//Akhir Menghitung P terhadap C (Education) //

	//Menghitung P terhadap C (Nikotin) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $nicotine[$index]==$t_nicotine[$i]){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $nicotine[$index]==$t_nicotine[$i]) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $nicotine[$index]==$t_nicotine[$i]) {
		$count2++;
	}
	$index++;
}
$hasil_class_0[4]=$count0/$count_class_0;
$hasil_class_1[4]=$count1/$count_class_1;
$hasil_class_2[4]=$count2/$count_class_2;

	//Akhir Menghitung P terhadap C (Nikotin) //

	//Menghitung P terhadap C (Caffein) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $caffeine[$index]==$t_caffeine[$i]){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $caffeine[$index]==$t_caffeine[$i]) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $caffeine[$index]==$t_caffeine[$i]) {
		$count2++;
	}
	$index++;
}
$hasil_class_0[5]=$count0/$count_class_0;
$hasil_class_1[5]=$count1/$count_class_1;
$hasil_class_2[5]=$count2/$count_class_2;
	//Akhir Menghitung P terhadap C (Caffein) //

	//Menghitung P terhadap C (Cokelat) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $chocolate[$index]==$t_chocolate[$i]){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $chocolate[$index]==$t_chocolate[$i]) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $chocolate[$index]==$t_chocolate[$i]) {
		$count2++;
	}
	$index++;
}
$hasil_class_0[6]=$count0/$count_class_0;
$hasil_class_1[6]=$count1/$count_class_1;
$hasil_class_2[6]=$count2/$count_class_2;

	//Akhir Menghitung P terhadap C (Cokelat) //

	//Menghitung P terhadap C (Alkohol) //
$index=0;
$count0=$count1=$count2=$count3=$count4=$count5=$count6=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $alchohol[$index]==$t_alchohol[$i]){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $alchohol[$index]==$t_alchohol[$i]) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $alchohol[$index]==$t_alchohol[$i]) {
		$count2++;
	}
	$index++;
}
$hasil_class_0[7]=$count0/$count_class_0;
$hasil_class_1[7]=$count1/$count_class_1;
$hasil_class_2[7]=$count2/$count_class_2;

	//Akhir Menghitung P terhadap C (Alkohol) //

	//Hitung Masing-masing Score per CLass //
$a=0;

$class=array(1,1,1);
while ($a<3) {
	$class[0]*=$hasil_class_0[$a];
	$class[1]*=$hasil_class_1[$a];
	$class[2]*=$hasil_class_2[$a];

	$a++;
}
$kesimpulan[0]=$class[0];
$kesimpulan[1]=$class[1];
$kesimpulan[2]=$class[2];

/*print_r($kesimpulan);
*/
rsort($class);

switch ($class[0]) {
			case $kesimpulan[0]:
			$hasil = "class_0";
			//echo "Tidak Berisiko";
			break;

			case $kesimpulan[1]:
			$hasil = "class_1";
			//echo "Risiko Rendah";
			break;

			case $kesimpulan[2]:
			$hasil = "class_2";
			//echo "Sangat Rendah";
			break;
		}

if ($hasil==$t_kelas[$i]) {
	$jumlah_data_sesuai++;
}

$jumlah_data_total++;
$i++;
$presentase = $jumlah_data_sesuai/$jumlah_data_total*100;
}

echo "Jumlah Data Sesuai = ".$jumlah_data_sesuai;
echo "<br>Jumlah Data Training = ".$jumlah_data_total;
echo "<br>Presentase = ".number_format($presentase,2)."%";