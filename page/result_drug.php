<?php
	
	$open=fopen('drug_consumption.csv', 'r');

	while (!feof($open)) {
		$getTextLine=fgets($open);
//		$explodeLine=explode(",", $getTextLine);
		echo $getTextLine."<br>";

	}

?>