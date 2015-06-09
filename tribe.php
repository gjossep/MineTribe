<?php 
require_once("models/config.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>tribepage</title>
	<!-- Add Any other css you want here -->
	<link rel="stylesheet" href="chatjs-gh-pages/stylesheets/pygment_trac.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	
	<?php require('phpfiles/head.php'); ?>
	<link href="css/tribeleader/stats.css" rel="stylesheet" type="text/css" />

	<style>
			.tribe h1 center {
	color: #000;
	background-color: #FFF;
	padding-top: 20px;
	padding-bottom:20px;
}
    .footer {
	background-color: #FFF;
	color:#000;
	
}
    .info h5 {
	color: #000;
	background-color: #FFF;
	padding-top: 10px;
	padding-bottom: 10px;
}

body {
	background-image: url(/img/backgroundlogin.png);
	background-repeat: repeat;

}
    </style>
    
	</head>

<body>
    	<?php require('phpfiles/header.php'); ?>
    <!--<script src="js/statstable.js"></script>-->
    <div class="tribe">
      <h1>
        <center>
          NAME OF TRIBE
        </center>
      </h1>
    </div>
<div>

<?php

$servername = "gjosse.nl.mysql";
$username = "gjosse_nl";
$password = "bcJ7UEPx";
$dbname = "gjosse_nl";





</div>
<div class="info">
<h5> <center><b>To join this Tribe send them an invite, they might not accept you.</b></center>
<center><b>Otherwise start your own Tribe, this can be done from your profile.</b></center></h5>
</div>      

<!--<script src="js/statstable.js"></script>
-->  


	<script src="chatjs-gh-pages/javascripts/scale.fix.js"></script>
    
    <div class="footer">
	<?php require('phpfiles/footer.php'); ?>
	</div>
	
	
    
</body>
</html>

