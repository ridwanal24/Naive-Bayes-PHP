<!DOCTYPE html>
<html>
<head>
   <title>Nama Random</title>
   <link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-info">
   <div class="container-fluid">
      <p class="h1 text-center text-light">NAIVE BAYES CLASSIFICATION</p>
      <?php
      include 'page/home.php';
      if (isset($_GET['submit'])) {
       $page="result_drug";
       include 'page/'.$page.'.php';
    }

    ?>
 </div>
</body>
</html>