<?php

session_start();

require_once "connection.php";

$user_fullName = $user_email = $user_mobile = $user_password = "";


// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Validate name
	$user_name =	$_POST["user_name"];
	$user_email = $_POST["user_email"];
	$user_mobile = $_POST["user_mobile"];
	$user_password = $_POST["user_password"];

	// print_r($_POST);


	// Check input errors before inserting in database
	$sql = "INSERT INTO user ( user_fullName, user_email, user_mobile, user_password ) VALUES  ( '" . $user_name . "','" . $user_email . "', '" . $user_mobile . "', '" . md5($user_password) . "' )";
	$result   = mysqli_query($conn, $sql);

	if(!$result){
		// header("Location: ../index.php");
		// $_SESSION['register'] = "Error Email Already Register";
		$data = [ 'status' => 'error', 'message' => "Email Already Register!" ];
	}
	else{
		// header("Location: ../index.php");
		// $_SESSION['register'] = "All Good!";
		$data = [ 'status' => 'success', 'message' => "Hurray! Please Login Now" ];
	}

	header('Content-type: application/json');
	echo json_encode( $data );
}

?>
