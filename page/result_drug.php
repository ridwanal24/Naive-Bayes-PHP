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
	$explodeLine=explode(",", $getTextLine);

	list($age[$i],$gender[$i],$education[$i],$nicotine[$i],$caffeine[$i],$chocolate[$i],$alchohol[$i],$kelas[$i],$x)=$explodeLine;
	$i++;
}

$n = count($kelas);

/*====================================================*/

	//Menghitung P Class//
$index=0;
$count_class_0=$count_class_1=$count_class_2=0;
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
$count0=$count1=$count2=0;

while($index<$n){
	if($kelas[$index]=="class_0" AND $age[$index]==$umur){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $age[$index]==$umur) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $age[$index]==$umur) {
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
	if($kelas[$index]=="class_0" AND $gender[$index]==$_GET['gender']){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $gender[$index]==$_GET['gender']) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $gender[$index]==$_GET['gender']) {
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
	if($kelas[$index]=="class_0" AND $education[$index]==$_GET['education']){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $education[$index]==$_GET['education']) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $education[$index]==$_GET['education']) {
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
	if($kelas[$index]=="class_0" AND $nicotine[$index]==$_GET['nicotine']){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $nicotine[$index]==$_GET['nicotine']) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $nicotine[$index]==$_GET['nicotine']) {
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
	if($kelas[$index]=="class_0" AND $caffeine[$index]==$_GET['caffeine']){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $caffeine[$index]==$_GET['caffeine']) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $caffeine[$index]==$_GET['caffeine']) {
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
	if($kelas[$index]=="class_0" AND $chocolate[$index]==$_GET['chocolate']){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $chocolate[$index]==$_GET['chocolate']) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $chocolate[$index]==$_GET['chocolate']) {
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
	if($kelas[$index]=="class_0" AND $alchohol[$index]==$_GET['alchohol']){
		$count0++;
	}else if ($kelas[$index]=="class_1" AND $alchohol[$index]==$_GET['alchohol']) {
		$count1++;
	}else if ($kelas[$index]=="class_2" AND $alchohol[$index]==$_GET['alchohol']) {
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
while ($a<7) {
	$class[0]*=$hasil_class_0[$a];
	$class[1]*=$hasil_class_1[$a];
	$class[2]*=$hasil_class_2[$a];

	$a++;
}
$kesimpulan[0]=$class[0];
$kesimpulan[1]=$class[1];
$kesimpulan[2]=$class[2];

rsort($class);
?>
<div class="row">
	<div class="col-2"></div>	
	<div class="col-8 rounded p-md-4 text-center bg-white shadow">
		<div class="m-5">
			<p><small>Risiko</small></p>	
			<p class="text-center">
				<?php
				switch ($class[0]) {
					case $kesimpulan[0]:
					echo "<center><div class='bg-success p-2 text-white h1 col-md-4 rounded shadow'>RENDAH</div></center>";
					break;

					case $kesimpulan[1]:
					echo "<center><div class='bg-warning p-2 text-white h1 col-md-4 rounded shadow'>SEDANG</div></center>";
					break;

					case $kesimpulan[2]:
					echo "<center><div class='bg-danger p-2 text-white h1 col-md-4 rounded shadow'>TINGGI</div></center>";
					break;
				}
	//Akhir Hitung Masing-masing Score per CLass //
				?>
			</p>
		</div>
		
		<p>
			<a class="btn btn-primary" data-toggle="collapse" href="#detail" role="button" aria-expanded="false" aria-controls="collapseExample">
				Detail Score
			</a>
		</p>
		<div class="collapse" id="detail">
			<div class="card text-left card-body">
				<div class="row">
					<!-- Start -->
					<div class="col-12 m-2">
						<p>P( class = "class_0" ) = <?php echo $hasil_class_0[0];?></p>
						<p>P( class = "class_1" ) = <?php echo $hasil_class_1[0];?></p>
						<p>P( class = "class_2" ) = <?php echo $hasil_class_2[0];?></p>
					</div>
					<!-- End -->

					<!-- Start -->
					<div class="col-12 m-2">
						<p>P( age = "<?php echo $_GET['age']; ?>" | class = "class_0" ) = <?php echo $hasil_class_0[1];?></p>
						<p>P( age = "<?php echo $_GET['age']; ?>" | class = "class_1" ) = <?php echo $hasil_class_1[1];?></p>
						<p>P( age = "<?php echo $_GET['age']; ?>" | class = "class_2" ) = <?php echo $hasil_class_2[1];?></p>
					</div>
					<!-- End -->

					<!-- Start -->
					<div class="col-12 m-2">
						<p>P( gender = "<?php echo $_GET['gender']; ?>" | class = "class_0" ) = <?php echo $hasil_class_0[2];?></p>
						<p>P( gender = "<?php echo $_GET['gender']; ?>" | class = "class_1" ) = <?php echo $hasil_class_1[2];?></p>
						<p>P( gender = "<?php echo $_GET['gender']; ?>" | class = "class_2" ) = <?php echo $hasil_class_2[2];?></p>
					</div>
					<!-- End -->

					<!-- Start -->
					<div class="col-12 m-2">
						<p>P( education = "<?php echo $_GET['education']; ?>" | class = "class_0" ) = <?php echo $hasil_class_0[3];?></p>
						<p>P( education = "<?php echo $_GET['education']; ?>" | class = "class_1" ) = <?php echo $hasil_class_1[3];?></p>
						<p>P( education = "<?php echo $_GET['education']; ?>" | class = "class_2" ) = <?php echo $hasil_class_2[3];?></p>
					</div>
					<!-- End -->

					<!-- Start -->
					<div class="col-12 m-2">
						<p>P( nicotine = "<?php echo $_GET['nicotine']; ?>" | class = "class_0" ) = <?php echo $hasil_class_0[4];?></p>
						<p>P( nicotine = "<?php echo $_GET['nicotine']; ?>" | class = "class_1" ) = <?php echo $hasil_class_1[4];?></p>
						<p>P( nicotine = "<?php echo $_GET['nicotine']; ?>" | class = "class_2" ) = <?php echo $hasil_class_2[4];?></p>
					</div>
					<!-- End -->

					<!-- Start -->
					<div class="col-12 m-2">
						<p>P( caffeine = "<?php echo $_GET['caffeine']; ?>" | class = "class_0" ) = <?php echo $hasil_class_0[5];?></p>
						<p>P( caffeine = "<?php echo $_GET['caffeine']; ?>" | class = "class_1" ) = <?php echo $hasil_class_1[5];?></p>
						<p>P( caffeine = "<?php echo $_GET['caffeine']; ?>" | class = "class_2" ) = <?php echo $hasil_class_2[5];?></p>
					</div>
					<!-- End -->

					<!-- Start -->
					<div class="col-12 m-2">
						<p>P( chocolate = "<?php echo $_GET['chocolate']; ?>" | class = "class_0" ) = <?php echo $hasil_class_0[6];?></p>
						<p>P( chocolate = "<?php echo $_GET['chocolate']; ?>" | class = "class_1" ) = <?php echo $hasil_class_1[6];?></p>
						<p>P( chocolate = "<?php echo $_GET['chocolate']; ?>" | class = "class_2" ) = <?php echo $hasil_class_2[6];?></p>
					</div>
					<!-- End -->					

					<!-- Start -->
					<div class="col-12 m-2">
						<p>P( alcohol = "<?php echo $_GET['alchohol']; ?>" | class = "class_0" ) = <?php echo $hasil_class_0[7];?></p>
						<p>P( alcohol = "<?php echo $_GET['alchohol']; ?>" | class = "class_1" ) = <?php echo $hasil_class_1[7];?></p>
						<p>P( alcohol = "<?php echo $_GET['alchohol']; ?>" | class = "class_2" ) = <?php echo $hasil_class_2[7];?></p>
					</div>
					<!-- End -->

					<!-- Start -->
					<div class="col-12 m-2">
						<p>P( X | class = "class_0" ) = <?php echo $hasil_class_0[0]." x ".$hasil_class_0[1]." x ".$hasil_class_0[2]." x ".$hasil_class_0[3]." x ".$hasil_class_0[4]." x ".$hasil_class_0[5]." x ".$hasil_class_0[6]." x ".$hasil_class_0[7]." = ".$kesimpulan[0];?></p>
						<p>P( X | class = "class_1" ) = <?php echo $hasil_class_1[0]." x ".$hasil_class_1[1]." x ".$hasil_class_1[2]." x ".$hasil_class_1[3]." x ".$hasil_class_1[4]." x ".$hasil_class_1[5]." x ".$hasil_class_1[6]." x ".$hasil_class_1[7]." = ".$kesimpulan[1];?></p>
						<p>P( X | class = "class_2" ) = <?php echo $hasil_class_2[0]." x ".$hasil_class_2[1]." x ".$hasil_class_2[2]." x ".$hasil_class_2[3]." x ".$hasil_class_2[4]." x ".$hasil_class_2[5]." x ".$hasil_class_2[6]." x ".$hasil_class_2[7]." = ".$kesimpulan[2];?></p>
					</div>
					<!-- End -->
				</div>
			</div>
		</div>
	</div>
	<div class="col-2"></div>	
</div>