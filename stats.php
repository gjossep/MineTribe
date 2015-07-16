
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Statistics</title>	
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
	.tribe h1 {
		margin-top:0px;	
	}
    .footer {
	background-color: #CCC;
	
}
	table th {
  		background: #06F;
		color:#FFF;
	}
    
	.info h5 {
	color: #FFF;
	background-color: #06F;
	padding-top:10px;
	padding-bottom:10px;
	margin-bottom: 0px;
}
table {
	  border-bottom: 2px solid #06F;
}
/*header {
    background-image:none;
	background-color:#000;
}*/


    </style>
	</head>
	<body>
    	<?php require('phpfiles/header.php'); ?>
    <!--<script src="js/statstable.js"></script>-->
    <div class="tribe">
      <h1>
        <center>
          Leaderboard
        </center>
      </h1>
    </div>
<div>

<?php

$servername = "localhost";
$username = "gjosse";
$password = "Rcw#1mcs";
$dbname = "minetribe";

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


</div>
<div class="info">
<h5> <center><b>These are the overall stats, you can check the top rank of each skill by clicking on it.</b></center>
<center><b>Search your friends stats or check your Fun Statistics on your profile. (You can click on a name to go to their profile)</b></center></h5>
</div>    
<!--<script src="js/statstable.js"></script>
-->
    <div class="footer">
	<?php require('phpfiles/footer.php'); ?>
	</div>
	
</body>
</html>
