
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>servers</title>	
	<?php require('phpfiles/head.php'); ?>
	<!-- Add Any other css you want here -->
	<link href="css/tribeleader/stats.css" rel="stylesheet" type="text/css" />
	<script src="js/sorttable.js"></script>
    <style>
		table.sortable th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
    		content: " \25B4\25BE" 
		}
	.tribe h1 center {
	color: #FFF;
	background-color: #F93;
	padding-top: 20px;
	padding-bottom:20px;
}
    .footer {
	background-color: #CCC;
	
}
	table th {
  		background: #F93;
		color:#FFF;
	}
    
	.info h5 {
	color: #FFF;
	background-color: #F93;
	padding-top:10px;
	padding-bottom:10px;
}
table {
	  border-bottom: 2px solid #06F;
}

body {
	background-image: url(/img/backgroundservers.png);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center bottom;
}

    </style>
	</head>
	<body>
    	<?php require('phpfiles/header.php'); ?>
    <!--<script src="js/statstable.js"></script>-->
    <div class="tribe">
      <h1>
        <center>
          Servers using MineTribe Plugin
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

$sql = "SELECT name, ip FROM uf_servers";
$result = $conn->query($sql);



?>

<table class="sortable">
  <thead>
    <tr>
      <th>Servers</th>
      <th>IP</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
	
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
			echo "<tr>";
		
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["ip"]."</td>";
		
			echo "</tr>";
		
		
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

</div>
<div class="info">
<h5> <center><b>These servers have the MineTribe plugin installed, these servers record your statistics.</b></center>
<center><b>If you want your stats to go up than play on these servers, or get your Minecraft Server to download the MineTribe Plugin.</b></center></h5>
</div>    
<!--<script src="js/statstable.js"></script>
-->
    <div class="footer">
	<?php require('phpfiles/footer.php'); ?>
	</div>
	
</body>
</html>
