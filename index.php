<!DOCTYPE html>
<html>
<head>
	<title>NBC</title>
	<link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="asset/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<body class="bg-light">
	<div class="container-fluid">
		<p class="h1 text-center text-light">NAIVE BAYES CLASSIFICATION</p>
		<?php
		if (!isset($_GET['submit'])) {
			$page="home";
		}else {
			$page="result_drug";
		}
		include 'page/'.$page.'.php';
		?>
	</div>
</body>
</html>