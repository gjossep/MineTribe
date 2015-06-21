
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>friends</title>	
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
	background-color: #074800;
	padding-top: 20px;
	padding-bottom:20px;
}
	.tribe h1 {
	margin-top:0px;	
	}
    .footer {
	background-color: #CCC;
	color:#000;
	
}
    .info h5 {
	color: #FFF;
	background-color: #135714;
	padding-top: 10px;
	padding-bottom: 10px;
	margin-bottom: 0px;
}

	table th {
  	background: #093;
	color:#FFF;
	width:50%;
}

body {
	background-image: url(/img/backgroundfriends.png);
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: center top;
}

table {
	  border-bottom: 2px solid #990001;
}
/*header {
    background-image:none;
	background-color:#135714;
}*/
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
   

<?php

$servername = "localhost";
$username = "gjosse";
$password = "Rcw#1mcs";
$dbname = "minetribe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT user_name, display_name";
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
	
			echo "<tr>";
		
			echo "<td><a href='".$row["user_name"]."'>".$row["display_name"]."</a></td>";
		
			echo "</tr>";
		
		
    }
} 

$conn->close();
	
	
	for($i = 0; $i <20; $i++) {
			
			echo "<tr>";
		
			echo "<td>names</td>";

			echo "</tr>";
			
	}
	
	?>
    
    
    
  </tbody>
</table>

</div>
          

<!--<script src="js/statstable.js"></script>
-->

<div class="info">
<h5> <center><b>Looking for a friend? Search them below!</b></center>
<center><b>Can't find your friend? Invite them to MineTribe!</b></center></h5>
</div>  

    <div class="footer">
	<?php require('phpfiles/footer.php'); ?>
	</div>
	
</body>
</html>
