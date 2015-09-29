<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "familyapp_db";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	// Secret key for JWT
	$key = "8479834jkfjnvif8098&*&^%djfdfk)(@";
?>