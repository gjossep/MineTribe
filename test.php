<?php

$servername = "84.105.141.213:3306";
$username = "root";
$password = "jozajoza";

// Create connection
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    echo ("Connection failed: " . $conn->connect_error);
} else {
	
	echo "works";	
}



?>