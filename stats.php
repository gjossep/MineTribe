
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
	background-color: #000;
	padding-top: 20px;
	padding-bottom:20px;
}
    .footer {
	background-color: #CCC;
	
}

    </style>
	</head>
	<body>
    	<?php require('phpfiles/header.php'); ?>
    <!--<script src="js/statstable.js"></script>-->
    <div class="tribe">
      <h1>
        <center>
          Stats Leaderboard
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
      <th>Player</th>
      
      <th>Minutes Played</th>
      <th>Pvp Kills</th>
      <th>Deaths</th>
      <th>Damage Dealt</th>
      <th>Damage Taken</th>
      <th>Mob Kills</th>
      <th>Distance Walked</th>
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
		
			echo "<td>".$row["rank"]."</td>";
			echo "<td><a href='profile.php?user=".$row["user_name"]."'>".$row["display_name"]."</a></td>";
		
			echo "<td>".$stats[0]."</td>";
			echo "<td>".$stats[1]."</td>";
			echo "<td>".$stats[2]."</td>";
			echo "<td>".$stats[3]."</td>";
			echo "<td>".$stats[4]."</td>";
			echo "<td>".$stats[5]."</td>";
			echo "<td>".$stats[6]."</td>";
		
			echo "</tr>";
		}
		
    }
} 

$conn->close();
	
	
	for($i = 0; $i <20; $i++) {
		echo "<tr>";
		
			echo "<td>Rank</td>";
			echo "<td>NAME</td>";
		
			echo "<td>1</td>";
			echo "<td>2</td>";
			echo "<td>3</td>";
			echo "<td>4</td>";
			echo "<td>5</td>";
			echo "<td>6</td>";
			echo "<td>7</td>";
		
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
