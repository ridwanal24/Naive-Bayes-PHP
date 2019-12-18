<!DOCTYPE html>
<html>
   <head>
      <title>Nama Random</title>
      <link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.min.css">
   </head>
   <body class="bg-info">
      <div class="container-fluid">
         <p class="h1 text-center text-light">GENERATOR NAMA INDONESIA</p>
      	<?php
      	if (isset($_GET['submit'])) {
      		$page="result_drug";
      	}else{
      		$page="result_drug";
      	}
      		include 'page/'.$page.'.php';	
      	?>
      </div>
   </body>
</html>