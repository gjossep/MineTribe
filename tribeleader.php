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
	<title>tribeleaderboard</title>
	<!-- Add Any other css you want here -->
	<link href="css/tribeleader/tribeleader.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="chatjs-gh-pages/stylesheets/pygment_trac.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		 
    </script>
	<?php require('phpfiles/head.php'); ?>
	<link href="css/tribeleader/stats.css" rel="stylesheet" type="text/css" />
	<script src="js/sorttable.js"></script>
	<style>
		table.sortable th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
    		content: " \25B4\25BE"
		}
		table th {
  			background: #990001;
			color:#FFF
		}
		table {
			  border-bottom: 2px solid #990001;
		}
		
    .sortable tr td img {
	background:#666;
}
    .tribe h1 {
	color: #FFF;
	background-color: #C00;
	padding-top: 20px;
	padding-bottom:20px;
}

body {
	background-image: url(/img/backgroundtribe.png);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center top;
}

.footer {
	background:#CCC;
	color:#000;
}

   
    .info h5 {
	color: #FFF;
	background-color: #990001;
	padding-top:10px;
	padding-bottom:10px;
}
header {
    background-image:none;
	background-color:#C00;
}
    </style>
    
	</head>

<body>
    	<?php require('phpfiles/header.php'); ?>
    <!--<script src="js/statstable.js"></script>-->
    <div class="tribe">
      <h1>
        <center>
          Tribes
        </center>
      </h1>
    </div>
<div>

<?php

$servername = "gjosse.nl.mysql";
$username = "gjosse_nl";
$password = "bcJ7UEPx";
$dbname = "gjosse_nl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT user_name, display_name, stats, rank FROM uf_users";
$result = $conn->query($sql);



?>

<table class="sortable">
  <thead>
    <tr>
      <th>Rank</th>
      <th>Tribe</th>
      
      <th>Pvp Kills</th>      
      <th>Members</th>


    </tr>
  </thead>
  <tbody>
    
	<?php 
	
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		if($row["rank"] != 0) {
		
			echo "<tr>";
		
			echo "<td>".$row["ranktribe"]."</td>";
			echo "<td>".$row["tribename"]."</td>";
		
			echo "<td>".$stats["totalpvpkills"]."</td>";
			echo "<td>".$stats["totalmembers"]."</td>";	
			
			echo "</tr>";
		}
		
    }
}

$conn->close();
	
	
	for($i = 0; $i <19; $i++) {
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
<h5> <center><b>Want to join a tribe? Click on a tribe you like, to go to their page, and send an invite! They need to accept you in order for you to get into the tribe.</b></center>
<center><b>Or start your own tribe with your Minecraft friends and try to become the #1 tribe!</b></center></h5>
</div>      

<script src="js/statstable.js"></script>
 
    
    <div class="footer">
	<?php require('phpfiles/footer.php'); ?>
	</div>
	
	
    
</body>
</html>

