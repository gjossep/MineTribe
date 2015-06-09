
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>stats</title>	
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
	background-color: #0a5025;
	padding-top: 20px;
	padding-bottom:20px;
}
    .footer {
	background-color: #0A5025;
	color:#000;
	
}
    .info h5 {
	color: #999;
	background-color: #0A5025;
	padding-top: 10px;
	padding-bottom: 10px;
}

	table th {
  	background: #990001;
	color:#FFF
}

body {
	background-image: url(/img/backgroundfriends.png);
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
          Tribesmen
        </center>
      </h1>
    </div>
    
<div class="info">
<h5> <center><b>Looking for a friend? Search them below!</b></center>
<center><b>Can't find your friend? Invite them to MineTribe!</b></center></h5>
</div>  

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
      <th>Player Name</th>
    </tr>
  </thead>
  <tbody>
    <?php 
	
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$statsRaw = $row["stats"];
		$stats = explode(',', $statsRaw);
		
		if($row["rank"] != 0) {
		
			echo "<tr>";
		
			echo "<td><a href='profile.php?user=".$row["user_name"]."'>".$row["display_name"]."</a></td>";
		
			echo "</tr>";
		}
		
    }
} 

$conn->close();
	
	
	for($i = 0; $i <20; $i++) {
			
			echo "<tr>";
		
			echo "<td>Rank</td>";

			echo "</tr>";
			
	}
	
	?>
    
    
    
  </tbody>
</table>

</div>
          

<!--<script src="js/statstable.js"></script>
-->
    <div class="footer">
	<?php require('phpfiles/footer.php'); ?>
	</div>
	
</body>
</html>
