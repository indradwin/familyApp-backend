<?php 
	// Connect mysql and db, also define JWT secret key
	include 'connect_db.php';

	// Require for php-jwt
	require_once('../vendor/autoload.php');
	use \Firebase\JWT\JWT;

	// Get post data from android
	$msg = file_get_contents('php://input');
    $input = json_decode($msg, true);

    $uuid = uniqid();
    $username = $input["username"];
    $email = $input["email"];
    $password = $input["password"]; 

	// JWT token
	$token = array(
		"uuid" => $uuid,
	    "username" => $username,
	    "email" => $email
	);

	// Decode JWT
	//$decoded = JWT::decode($jwt, $key, array('HS256'));	

	// Save data to database
	$sql = "INSERT INTO tb_user (ID_USER, USERNAME, EMAIL, PASSWORD) VALUES ('".$uuid."', '".$username."', '".$email."', md5('".$password."'))";

	// Response
	if ($conn->query($sql) === TRUE) {
		// Create JWT
		$jwt = JWT::encode($token, $key);

		// Create Array for Json
		$data = array(
			'status'      => 'success',
		    'username'    => $username,
		    'jwt'         => $jwt
		);

		// Encode Json
		$json_resp = json_encode($data);

	    echo $json_resp;
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	   
?>