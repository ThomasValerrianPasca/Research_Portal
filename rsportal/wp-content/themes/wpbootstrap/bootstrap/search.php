<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - A Free Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/freelancer.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>



<div class="col-md-6">
	<div class="container">

<h3>Results: </h3>

<?php
mysql_connect("localhost", "root", "");
mysql_select_db("test");

$sql = mysql_query("SELECT * FROM searchengine WHERE pagecontent LIKE '%$_GET[term]%' LIMIT 0,20");

while($ser = mysql_fetch_array($sql)) { echo "<p><a href='$ser[pageurl]'>$ser[pageurl]</a></p>"; }
?>

<hr>

<a href="./index.php">Go Back</a>
	</div>
</div>

</body>

</html>