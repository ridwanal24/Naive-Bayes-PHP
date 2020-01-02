<?php
	//deklarasi variabel data 
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

	//Klasifikasi Kelas Usia
$umur=0;
if ($_GET['age']<24) {
	$umur="age_1";
}else if ($_GET['age']>=25 AND $_GET['age']<=34) {
	$umur="age_2";
}else if ($_GET['age']>=35 AND $_GET['age']<=44) {
	$umur="age_3";
}else if ($_GET['age']>=45 AND $_GET['age']<=54) {
	$umur="age_4";
}else if ($_GET['age']>=55 AND $_GET['age']<=64) {
	$umur="age_5";
}else{
	$umur="age_6";
} 

/*-0.95197	<24	  tahun
-0.07854	25-34 tahun
0.49788		35-44 tahun
1.09449 	45-54 tahun
1.82213 	55-64 tahun
2.59171 	65+   tahun*/
	//deklarasi variabel hasil
$hasil_class_0 = array();
$hasil_class_1 = array();
$hasil_class_2 = array();
$hasil_class_3 = array();
$hasil_class_4 = array();
$hasil_class_5 = array();
$hasil_class_6 = array();

	//proses ambil data
$open=fopen('drug_consumption_(backup).csv', 'r');
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
	if($kelas[$index]=="class_0" AND $age[$index]==$umur){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $age[$index]==$umur) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $age[$index]==$umur) {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $age[$index]==$umur) {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $age[$index]==$umur) {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $age[$index]==$umur) {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $age[$index]==$umur) {
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
	if($kelas[$index]=="class_0" AND $gender[$index]==$_GET['gender']){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $gender[$index]==$_GET['gender']) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $gender[$index]==$_GET['gender']) {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $gender[$index]==$_GET['gender']) {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $gender[$index]==$_GET['gender']) {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $gender[$index]==$_GET['gender']) {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $gender[$index]==$_GET['gender']) {
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
	if($kelas[$index]=="class_0" AND $education[$index]==$_GET['education']){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $education[$index]==$_GET['education']) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $education[$index]==$_GET['education']) {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $education[$index]==$_GET['education']) {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $education[$index]==$_GET['education']) {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $education[$index]==$_GET['education']) {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $education[$index]==$_GET['education']) {
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
	if($kelas[$index]=="class_0" AND $nicotine[$index]==$_GET['nicotine']){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $nicotine[$index]==$_GET['nicotine']) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $nicotine[$index]==$_GET['nicotine']) {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $nicotine[$index]==$_GET['nicotine']) {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $nicotine[$index]==$_GET['nicotine']) {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $nicotine[$index]==$_GET['nicotine']) {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $nicotine[$index]==$_GET['nicotine']) {
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
	if($kelas[$index]=="class_0" AND $caffeine[$index]==$_GET['caffeine']){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $caffeine[$index]==$_GET['caffeine']) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $caffeine[$index]==$_GET['caffeine']) {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $caffeine[$index]==$_GET['caffeine']) {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $caffeine[$index]==$_GET['caffeine']) {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $caffeine[$index]==$_GET['caffeine']) {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $caffeine[$index]==$_GET['caffeine']) {
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
	if($kelas[$index]=="class_0" AND $chocolate[$index]==$_GET['chocolate']){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $chocolate[$index]==$_GET['chocolate']) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $chocolate[$index]==$_GET['chocolate']) {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $chocolate[$index]==$_GET['chocolate']) {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $chocolate[$index]==$_GET['chocolate']) {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $chocolate[$index]==$_GET['chocolate']) {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $chocolate[$index]==$_GET['chocolate']) {
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
	if($kelas[$index]=="class_0" AND $alchohol[$index]==$_GET['alchohol']){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $alchohol[$index]==$_GET['alchohol']) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $alchohol[$index]==$_GET['alchohol']) {
		$count2++;
	}else if ($kelas[$index]=="class_3" AND $alchohol[$index]==$_GET['alchohol']) {
		$count3++;
	}else if ($kelas[$index]=="class_4" AND $alchohol[$index]==$_GET['alchohol']) {
		$count4++;
	}else if ($kelas[$index]=="class_5" AND $alchohol[$index]==$_GET['alchohol']) {
		$count5++;
	}else if ($kelas[$index]=="class_6" AND $alchohol[$index]==$_GET['alchohol']) {
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

	//Hitung Masing-masing Score per CLass //
$a=0;

$class=array(1,1,1,1,1,1,1);
while ($a<7) {
	$class[0]*=$hasil_class_0[$a];
	$class[1]*=$hasil_class_1[$a];
	$class[2]*=$hasil_class_2[$a];
	$class[3]*=$hasil_class_3[$a];
	$class[4]*=$hasil_class_4[$a];
	$class[5]*=$hasil_class_5[$a];
	$class[6]*=$hasil_class_6[$a];

	$a++;
}
$kesimpulan[0]=$class[0];
$kesimpulan[1]=$class[1];
$kesimpulan[2]=$class[2];
$kesimpulan[3]=$class[3];
$kesimpulan[4]=$class[4];
$kesimpulan[5]=$class[5];
$kesimpulan[6]=$class[6];

/*print_r($kesimpulan);
*/
rsort($class);
?>
<div class="row">
	<div class="col-4"></div>	
	<div class="col-4 rounded p-md-4 text-center bg-light">
		<p class="h1 text-center">Tingkat Kerawanan</p>
		<br>
		<p class="h1">
		<?php
		switch ($class[0]) {
			case $kesimpulan[0]:
			echo "1";
			//echo "Tidak Berisiko";
			break;

			case $kesimpulan[1]:
			echo "2";
			//echo "Risiko Rendah";
			break;

			case $kesimpulan[2]:
			echo "3";
			//echo "Sangat Rendah";
			break;

			case $kesimpulan[3]:
			echo "4";
			break;

			case $kesimpulan[4]:
			echo "5";
			//echo "Risiko Sedang";
			break;

			case $kesimpulan[5]:
			echo "6";
			//echo "Berisiko";
			break;

			case $kesimpulan[6]:
			echo "7";
			//echo "Sangat Berisiko";
			break;
		}
	//Akhir Hitung Masing-masing Score per CLass //
		?>
		</p>
		<br><br><br>
			<p style="float:left;"><b>Skala : </b>1 - 7</p>		
	</div>
	<div class="col-4"></div>	
</div>