<?php
	
	$open=fopen('drug_consumption.data', 'r');

	while (!feof($open)) {
		$getTextLine=fgets($open);
//		$explodeLine=explode(",", $getTextLine);
		echo $getTextLine."<br>";

	}

?>