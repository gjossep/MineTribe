<?php 
require_once("../Account/models/config.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Tribe</title>
	<!-- Add Any other css you want here -->
	<link rel="stylesheet" href="../chatjs-gh-pages/stylesheets/pygment_trac.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	
	<?php require('../Scripts/phpfiles/head.php'); ?>
	<link href="../Main CSS/css/tribeleader/stats.css" rel="stylesheet" type="text/css" />

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

body {
	background-image: url(/img/backgroundlogin.jpg);
	background-repeat: repeat;

}

    .info {
	color: #000;
	background-color: #FFF;
	padding-top: 10px;
	padding-bottom: 10px;
}
    .main {
	color: #000;
	background-color: #FFF;
	margin-right: 25%;
	margin-left: 25%;
	position:relative;
}
		table.sortable th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
    		content: " \25B4\25BE" 
		}
	
	table th {
  		background: #F93;
		color:#FFF;
	}
    
table {
	  border-bottom: 2px solid #06F;
}

    </style>
    
	</head>

<body>
    	<?php require('../Scripts/phpfiles/header.php'); ?>
    <!--<script src="js/statstable.js"></script>-->
    <div class="tribe">
      <h1>
        <center>
          NAME OF TRIBE
        </center>
      </h1>
    </div>
    
	<div class="main">
    <img src="/img/cover/coverdefault.png" alt="cover photo tribe" style="width: 100%; height: 20%;">
  
  
  
  <?php

$servername = "gjosse.nl.mysql";
$username = "gjosse_nl";
$password = "bcJ7UEPx";
$dbname = "gjosse_nl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT name, ip FROM uf_servers";
$result = $conn->query($sql);



?>

<table class="sortable">
  <thead>
    <tr>
      <th>Members</th>
      <th>Rank</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
	
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
			echo "<tr>";
		
			echo "<td>".$row["tribeuser"]."</td>";
			echo "<td>".$row["rank"]."</td>";
		
			echo "</tr>";
		
		
    }
} 

$conn->close();
	
	
	for($i = 0; $i <5; $i++) {
		echo "<tr>";
		
			echo "<td>servers</td>";
			echo "<td>ip</td>";
			
			echo "</tr>";
			
	}
	
	?>
    
    
    
  </tbody>
</table>
    
    
    
    
    
    
</div>



<div class="info">
<h5><center><b>To join this Tribe send them an invite, they might not accept you.</b></center>
<center><b>Otherwise start your own Tribe, this can be done from your profile.</b></center></h5>
</div>      



    <div class="footer">
	<?php require('../Scripts/phpfiles/footer.php'); ?>
	</div>
	
	
    
</body>
</html>

