
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Statistics</title>	
	<!-- Add Any other css you want here -->

	<script src="js/sorttable.js"></script>
    <style>
table {
  font-family: 'Arial';
  border-collapse: collapse;
  border: 1px solid #eee;
  border-bottom: 2px solid #00cccc;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1), 0px 10px 20px rgba(0, 0, 0, 0.05), 0px 20px 20px rgba(0, 0, 0, 0.05), 0px 30px 20px rgba(0, 0, 0, 0.05);
  position: absolute;
  background: #E6E6E6;
}
table tr:hover {
  background: #CCC;
}
table tr:hover td {
  color: #555;
}
table th, table td {
  color: #000;
  border: 1px solid #eee;
  padding: 12px 35px;
  border-collapse: collapse;
}
table th {
	background: #00cccc;
	color: #000;
	text-transform: uppercase;
	font-size: 12px;
}
table th.last {
  border-right: none;
}

		table.sortable th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
    		content: " \25B4\25BE" 
		}
	table th {
  		background: #06F;
		color:#FFF;
	}
	table {
	  border-bottom: 2px solid #06F;
	  position:absolute;
}

body {
	background-image:none;	
}


    </style>
	</head>
	<body>
    <!--<script src="js/statstable.js"></script>-->

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
	
</body>
</html>
