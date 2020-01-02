<!DOCTYPE html>
<html>
<head>
 <title>NBC</title>
 <link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.min.css">
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